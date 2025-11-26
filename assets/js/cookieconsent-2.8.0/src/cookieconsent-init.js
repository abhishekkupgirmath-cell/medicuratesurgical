function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function removeCookies() {
    if(getCookie('cc_cookie') == null) {
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            console.log(name);
            // cc.eraseCookies([name]);
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/"
            document.cookie = name + '=; Path=/; Domain=localhost; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
    }
}

// obtain plugin
var cc = initCookieConsent();

// run plugin with your configuration
// fetch('https://ipapi.co/json/')
//     .then(response => response.json())
//     .then(data => {
//       const euCountries = ['AT', 'BE', 'BG', 'HR', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GR', 'HU', 'IE', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE'];

//       // Ak je používateľ z EÚ, spusti cookie consent banner
//     if (euCountries.includes(data.country)) {
//         removeCookies();
        if (window.location.href.indexOf('cookies.html') === -1) {
            cc.run({
                // current_lang: 'sk',
                autoclear_cookies: true,                    // default: false
                theme_css: 'assets/js/cookieconsent-2.8.0/src/cookieconsent.css',
                cookie_name: 'cc_cookie',             // default: 'cc_cookie'
                cookie_expiration: 182,                     // here 1 day, default: 182 days
                page_scripts: true,                         // default: false
                force_consent: true,                        // default: false

                auto_language: 'document',                     // default: null; could also be 'browser' or 'document'
                // autorun: true,                           // default: true
                // delay: 0,                                // default: 0
                // hide_from_bots: false,                   // default: false
                // remove_cookie_tables: false              // default: false
                // cookie_domain: location.hostname,        // default: current domain
                // cookie_path: '/',                        // default: root
                // cookie_same_site: 'Lax',
                // use_rfc_cookie: false,                   // default: false
                // revision: 0,                             // default: 0

                gui_options: {
                    consent_modal: {
                        layout: 'cloud',                    // box,cloud,bar
                        position: 'bottom center',          // bottom,middle,top + left,right,center
                        transition: 'slide'                 // zoom,slide
                    },
                    settings_modal: {
                        layout: 'bar',                      // box,bar
                        position: 'left',                   // right,left (available only if bar layout selected)
                        transition: 'slide'                 // zoom,slide
                    }
                },

                onAccept: function (cookie) {
                    console.log('onAccept fired ...');
                },

                onChange: function (cookie, changed_preferences) {
                    console.log('onAccept fired ...');
                },

                languages: {
                    'sk': {
                        consent_modal: {
                            title: 'Používame cookies!',
                            description: 'Naša webová stránka používa nevyhnutné súbory cookie na zabezpečenie správneho fungovania a analytické súbory cookie, aby sme pochopili, ako s nami komunikujete. Cookies budú nastavené až po prijatí. <button type="button" data-cc="c-settings" class="cc-link">Nastavenia cookies</button>',
                            primary_btn: {
                                text: 'Prijať všetko',
                                role: 'accept_all'              // 'accept_selected' or 'accept_all'
                            },
                            secondary_btn: {
                                text: 'Odmietnuť',
                                role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                            }
                        },
                        settings_modal: {
                            title: 'Konfigurácia cookies',
                            save_settings_btn: 'Uložiť nastavenie',
                            accept_all_btn: 'Prijať všetko',
                            reject_all_btn: 'Odmietnuť',
                            close_btn_label: 'Zavrieť',
                            cookie_table_headers: [
                                {col1: 'Názov'},
                                {col2: 'Doména'},
                                {col3: 'Expirácia'},
                                {col4: 'Popis'}
                            ],
                            blocks: [
                                {
                                    description: 'Naša webová stránka používa nevyhnutné súbory cookie na zabezpečenie správneho fungovania a analytické súbory cookie, aby sme pochopili, ako s nami komunikujete. Cookies budú nastavené až po prijatí. <a class=cc-link href="/sk/cookies.html" target="_blank">Viac o cookies</a>'
                                }, {
                                    title: 'Nevyhnutne potrebné cookies',
                                    description: 'Nevyhnutné cookies zabezpečujú správne fungovanie webstránky a majú tiež za účel zvýšenie užívateľského komfortu návštevníka webstránky. Nevyhnutné cookies zabezpečujú, aby správne fungovalo nielen prezeranie webstránky, ale aby správne fungovali aj funkcionality, ktoré majú slúžiť návštevníkovi webstránky.',
                                    toggle: {
                                        value: 'necessary',
                                        enabled: true,
                                        readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                                    }
                                }, {
                                    title: 'Analytické (štatistické) cookies',
                                    description: 'Analytické cookies zhromažďujú údaje o tom, ako návštevníci webstránky danú webstránku používajú. Na základe týchto informácii sa môžu prevádzkovatelia webstránok lepšie rozhodovať ohľadom ich webstránky. Ktorý obsah webstránky je dobrý a účinný a je pre spoločnosť kľúčový.',
                                    toggle: {
                                        value: 'analytics',     // your cookie category
                                        enabled: false,
                                        readonly: false
                                    },
                                    cookie_table: [             // list of all expected cookies
                                        {
                                            col1: '_ga',       // match all cookies starting with "_ga"
                                            col2: 'google.com',
                                            col3: '1 rok, 1 mesiac a 4 dni',
                                            col4: "Google Analytics nastavuje tento súbor cookie na výpočet údajov o návštevníkoch, reláciách a kampaniach a na sledovanie používania stránky pre analytickú správu webu. Súbor cookie ukladá informácie anonymne a priraďuje náhodne vygenerované číslo na rozpoznanie jedinečných návštevníkov.",
                                            is_regex: true
                                        },
                                        {
                                            col1: '_ga_*',
                                            col2: 'google.com',
                                            col3: '1 rok, 1 mesiac a 4 dni',
                                            col4: 'Google Analytics nastavuje tento súbor cookie na ukladanie a počítanie zobrazení stránok.'
                                        }
                                    ]
                                }, {
                                    title: 'Viac informácii',
                                    description: 'Viac informácií nájdete na stránke <a class=cc-link href="/sk/cookies.html" target="_blank">cookies</a>'
                                }
                            ]
                        }
                    },
                    'en': {
                        consent_modal: {
                            title: 'We use cookies!',
                            description: 'Our website uses essential cookies to ensure proper functioning and analytics cookies to understand how you interact with us. Cookies will only be set once received. <button type="button" data-cc="c-settings" class="cc-link">Cookie settings</button>',
                            primary_btn: {
                                text: 'Accept all',
                                role: 'accept_all'              // 'accept_selected' or 'accept_all'
                            },
                            secondary_btn: {
                                text: 'Reject',
                                role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                            }
                        },
                        settings_modal: {
                            title: 'Cookie settings',
                            save_settings_btn: 'Save settings',
                            accept_all_btn: 'Accept all',
                            reject_all_btn: 'Reject',
                            close_btn_label: 'Close',
                            cookie_table_headers: [
                                {col1: 'Name'},
                                {col2: 'Domain'},
                                {col3: 'Expiration'},
                                {col4: 'Description'}
                            ],
                            blocks: [
                                {
                                    description: 'Our website uses essential cookies to ensure proper functioning and analytics cookies to understand how you interact with us. Cookies will only be set once received. <a class=cc-link href="cookies.html" target="_blank">More</a>'
                                }, {
                                    title: 'Necessary cookies',
                                    description: 'Necessary cookies ensure the proper functioning of the website and also have the purpose of increasing the user experience of the website visitor. Necessary cookies ensure that not only the browsing of the website works properly, but also that the functionalities that are intended to serve the website visitor work properly.',
                                    toggle: {
                                        value: 'necessary',
                                        enabled: true,
                                        readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                                    }
                                }, {
                                    title: 'Analytical cookies',
                                    description: 'Analytical cookies collect data about how visitors to a website use that website. Based on this information, website operators can make better decisions about their website. Which website content is good and effective and is key for the company.',
                                    toggle: {
                                        value: 'analytics',     // your cookie category
                                        enabled: false,
                                        readonly: false
                                    },
                                    cookie_table: [             // list of all expected cookies
                                        {
                                            col1: '_ga',       // match all cookies starting with "_ga"
                                            col2: 'google.com',
                                            col3: '1 year 1 month 4 days',
                                            col4: "Google Analytics sets this cookie to calculate visitor, session and campaign data and track site usage for the site's analytics report. The cookie stores information anonymously and assigns a randomly generated number to recognise unique visitors.",
                                            is_regex: true
                                        },
                                        {
                                            col1: '_ga_*',
                                            col2: 'google.com',
                                            col3: '1 year 1 month 4 days',
                                            col4: 'Google Analytics sets this cookie to store and count page views.'
                                        }
                                    ]
                                }, {
                                    title: 'More information',
                                    description: 'More information can be found on the website <a class=cc-link href="cookies.html" target="_blank">cookies</a>'
                                }
                            ]
                        }
                    }
                }
            });
        }
//     } else {
//         document.querySelectorAll('script[data-cookiecategory]').forEach(function(script) {
//             if (script.getAttribute('type') === 'text/plain') {
//                 // Vytvor nový skriptový element
//                 var newScript = document.createElement('script');
                
//                 // Skopíruj atribúty zo starého skriptu do nového
//                 newScript.type = 'text/javascript';
//                 newScript.text = script.textContent || script.innerHTML;
                
//                 // Ak skript obsahuje zdroj (atribút src), skopíruj ho
//                 if (script.src) {
//                     newScript.src = script.src;
//                 }

//                 // Pridaj nový skript do dokumentu, aby sa vykonal
//                 document.head.appendChild(newScript);

//                 // Odstráň starý skript, ktorý už má typ 'text/plain'
//                 script.parentNode.removeChild(script);
//             }
//         });
//     }
// }).catch(err => console.error('Geolocation error: ', err));





