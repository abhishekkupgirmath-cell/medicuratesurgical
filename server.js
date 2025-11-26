// Simple HTTP server for testing the Angular app
const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 4200;

const mimeTypes = {
  '.html': 'text/html',
  '.js': 'text/javascript',
  '.css': 'text/css',
  '.json': 'application/json',
  '.png': 'image/png',
  '.jpg': 'image/jpg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.wav': 'audio/wav',
  '.mp4': 'video/mp4',
  '.woff': 'application/font-woff',
  '.ttf': 'application/font-ttf',
  '.eot': 'application/vnd.ms-fontobject',
  '.otf': 'application/font-otf',
  '.wasm': 'application/wasm',
  '.ico': 'image/x-icon'
};

function createServerInstance() {
  return http.createServer((req, res) => {
    console.log(`${req.method} ${req.url}`);

    // Remove query string and decode URI
    let urlPath = decodeURIComponent(req.url.split('?')[0]);
    let filePath = '.' + urlPath;
    
    // Handle root path
    if (filePath === './' || filePath === '.' || urlPath === '/') {
      filePath = './index.html';
    }

    const extname = String(path.extname(filePath)).toLowerCase();
    
    // List of static file extensions that should be served directly
    const staticExtensions = ['.js', '.css', '.json', '.png', '.jpg', '.jpeg', '.gif', '.svg', 
                             '.woff', '.woff2', '.ttf', '.eot', '.otf', '.ico', '.mp4', '.wav', 
                             '.wasm', '.webp', '.webm'];
    
    // Check if it's a static asset
    const isStaticAsset = staticExtensions.includes(extname);
    
    // Check if file exists and is a file (not directory)
    fs.stat(filePath, (err, stats) => {
      if (err || !stats || !stats.isFile()) {
        // File doesn't exist or is a directory - serve index.html for Angular routing
        // This handles all Angular routes like /products/medvisor, /products/anatomyxr, etc.
        fs.readFile('./index.html', (error, content) => {
          if (error) {
            res.writeHead(500);
            res.end(`Server Error: ${error.code}`);
          } else {
            res.writeHead(200, { 
              'Content-Type': 'text/html',
              'Cache-Control': 'no-cache'
            });
            res.end(content, 'utf-8');
          }
        });
      } else if (isStaticAsset || (extname === '.html' && filePath !== './index.html')) {
        // File exists and is a static asset, OR it's a distinct .html file (not index.html) - serve it
        fs.readFile(filePath, (error, content) => {
          if (error) {
            res.writeHead(404);
            res.end('File not found');
          } else {
            const contentType = mimeTypes[extname] || 'application/octet-stream';
            res.writeHead(200, { 'Content-Type': contentType });
            res.end(content, 'utf-8');
          }
        });
      } else {
        // File exists but not a static asset - serve index.html (for .html files or unknown)
        fs.readFile('./index.html', (error, content) => {
          if (error) {
            res.writeHead(500);
            res.end(`Server Error: ${error.code}`);
          } else {
            res.writeHead(200, { 
              'Content-Type': 'text/html',
              'Cache-Control': 'no-cache'
            });
            res.end(content, 'utf-8');
          }
        });
      }
    });
  });
}

// Try to start server on desired port, and if in use try the next port (up to +10)
function startServer(preferredPort, maxRetries = 10) {
  let attempt = 0;

  function tryListen(port) {
    const srv = createServerInstance();
    srv.once('error', (err) => {
      if (err && err.code === 'EADDRINUSE') {
        console.warn(`Port ${port} is in use.`);
        attempt += 1;
        if (attempt <= maxRetries) {
          const nextPort = port + 1;
          console.log(`Trying port ${nextPort}...`);
          setTimeout(() => tryListen(nextPort), 200);
        } else {
          console.error(`All ports from ${preferredPort} to ${port} are in use. Exiting.`);
          process.exit(1);
        }
      } else {
        console.error('Server error:', err);
        process.exit(1);
      }
    });

    srv.listen(port, () => {
      console.log(`Server running at http://localhost:${port}/`);
      console.log('Press Ctrl+C to stop the server');
    });
  }

  tryListen(preferredPort);
}

startServer(PORT);

