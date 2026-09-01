<?php
/**
 * Template Name: Caissa — Opiniones y testimonios
 *
 * Migrada desde reviews/index.html del repo Caissa-Nueva-Web-2026.
 * El head, el nav y el footer los pone el tema (header.php / footer.php).
 * El CSS y el JS de esta plantilla se encolan desde inc/enqueue.php.
 *
 * @package Caissa
 */

get_header();
?>
<?php if ( CAISSA_SCHEMA_PROPIO ) : ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://caissa.digital/#organization",
      "name": "Caissa",
      "url": "https://caissa.digital/",
      "logo": "https://caissa.digital/logo-caissa.webp",
      "description": "Agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads).",
      "foundingDate": "2021",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "65",
        "bestRating": "5"
      },
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.sortlist.es/agency/caissa",
        "https://www.google.com/partners/agency?id=9889692537"
      ]
    },
    {
      "@type": "CollectionPage",
      "@id": "https://caissa.digital/reviews/#webpage",
      "url": "https://caissa.digital/reviews/",
      "name": "Opiniones de Caissa: testimonios y resultados de clientes",
      "description": "Opiniones y testimonios de clientes de Caissa: resultados en Google Ads y Meta Ads, en video y en reseñas públicas. 4.9 en Google y 5.0 en Clutch.",
      "inLanguage": "es-AR",
      "about": {
        "@id": "https://caissa.digital/#organization"
      },
      "mainEntity": {
        "@type": "ItemList",
        "numberOfItems": 15,
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Paula Luzzi",
                "jobTitle": "CEO",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Luzzi Digital"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "No tengo palabras para describir lo que cambió mi empresa después de empezar a trabajar con Manu y su equipo. Obtuve mejores resultados, procesos más fluidos y un acompañamiento continuo de parte de profesionales que son expertos, con una experiencia increíble. Mi vida cambió después de ellos. Si están pensando en contratarlos, no lo duden ni un segundo.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 2,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Francisco",
                "jobTitle": "Socio",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Constructora Cipolletti"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Junto a Caissa, crecimos más rápido de lo que imaginamos.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 3,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Ignacio",
                "jobTitle": "Gerente de Marketing",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Axion Lift"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Caissa optimizó nuestros costos y ordenó nuestro seguimiento online.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 4,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Pamela Cochia",
                "jobTitle": "Cofundadora",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Espacio Casa"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Ayudan a traducir todo el esfuerzo de la empresa en ventas. Lograron un ROAS récord. Son un gran aliado de nuestra empresa.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 5,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Juan París",
                "jobTitle": "E-commerce Manager",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Colchonería Ideal"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Superamos todas las expectativas y logramos récords en ventas. Gracias al caso de éxito lanzamos nuestro segundo e-commerce junto a ellos.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 6,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Jon Uría",
                "jobTitle": "Director de ventas y marketing",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Cefil Pool"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Caissa nos consiguió unos costes por leads y por click verdaderamente eficientes.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 7,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Guillermo Oliveti",
                "jobTitle": "COO",
                "worksFor": {
                  "@type": "Organization",
                  "name": "GOIAR"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Fue un verdadero placer trabajar con ellos.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 8,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Mariana Luaces",
                "jobTitle": "Cofundadora",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Cruzando Mares"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Gracias a Caissa, mi empresa vende incluso cuando estoy de vacaciones.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 9,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Jaime",
                "jobTitle": "CEO",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Over Option"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Caissa transformó nuestra publicidad con transparencia y feedback constante.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 10,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Juan Gonzalez Trück",
                "jobTitle": "Dueño",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Clean It"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Hemos trabajado juntos desde el día uno, como si Caissa fuera parte de Clean It.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 11,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Ana Kaltenbrunner",
                "jobTitle": "Brand Manager",
                "worksFor": {
                  "@type": "Organization",
                  "name": "El Club de la Milanesa"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Lo que más nos impresionó fue su calidad humana, su paciencia y su profesionalismo.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 12,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Camila Jiménez",
                "jobTitle": "Marketing Manager",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Youtooproject"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "La comunicación es siempre muy rápida, y la respuesta también.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 13,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Pablo Marcovich",
                "jobTitle": "CEO",
                "worksFor": {
                  "@type": "Organization",
                  "name": "SAMBA"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Estuvieron presentes, atentos y proactivos durante todo el proceso.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 14,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Sydney Pinoy",
                "jobTitle": "CEO",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Neuros Center"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Ordenaron muy bien nuestra estrategia y aumentaron mucho nuestros clientes y conversiones.",
              "inLanguage": "es"
            }
          },
          {
            "@type": "ListItem",
            "position": 15,
            "item": {
              "@type": "Review",
              "author": {
                "@type": "Person",
                "name": "Silvana Ponce",
                "jobTitle": "Fundadora",
                "worksFor": {
                  "@type": "Organization",
                  "name": "Latitud Ushuaia Travel"
                }
              },
              "itemReviewed": {
                "@id": "https://caissa.digital/#organization"
              },
              "reviewBody": "Entienden nuestro negocio, nuestros objetivos y la dinámica del turismo.",
              "inLanguage": "es"
            }
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/reviews/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://caissa.digital/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Opiniones",
          "item": "https://caissa.digital/reviews/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/reviews/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Estas reseñas son reales?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, y por eso están firmadas con nombre, cargo y empresa. Las de Google y Clutch podés leerlas en esos perfiles, que no administramos nosotros. Los videos los grabaron los propios clientes y están publicados en nuestro canal de YouTube."
          }
        },
        {
          "@type": "Question",
          "name": "¿Puedo hablar con un cliente actual antes de contratarlos?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí. Pedilo en la consultoría gratuita y te ponemos en contacto con un cliente de un rubro parecido al tuyo. No mostramos referencias a cualquiera que lo pida, pero si estás evaluando en serio, es razonable que quieras hablar con alguien."
          }
        },
        {
          "@type": "Question",
          "name": "¿Por qué algunas reseñas no tienen un porcentaje?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porque no todas las cuentas miden lo mismo. Publicamos el número solo cuando el cliente lo midió en su propia cuenta y nos autorizó a mostrarlo. Cuando la reseña habla del trato o del proceso y no hay una métrica atada, la dejamos sin número en vez de inventarle uno."
          }
        },
        {
          "@type": "Question",
          "name": "¿Estos resultados me los garantizan a mí?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Cada cuenta arranca de un lugar distinto: el rubro, la competencia, el margen y lo que ya venías haciendo cambian mucho el punto de partida. Lo que sí podemos decirte antes de que firmes nada es qué vemos en tu cuenta y qué creemos que se puede mover. Eso es la consultoría gratuita."
          }
        }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>
<!-- ===================== HERO =====================
     El H1 exacto es "Opiniones de Caissa" y va como kicker, con el claim grande abajo
     como <p>. Es el mismo patrón que las landings de Google y Meta (§11): invierte la
     jerarquía visual de la home a propósito, para que se note que te moviste de página. -->
<section class="rvh">
  <div class="wrap rvh-in">
    <h1>Opiniones de Caissa</h1>
    <p class="rvh-claim">Ayudamos a nuestros clientes a <span class="hl">ganar más</span></p>
    <p class="rvh-sub">Cada empresa de esta página confió en nosotros para crecer. Esto es lo que lograron, contado por ellos.</p>

    <div class="rvh-proof reveal">
      <div class="titem">
        <div class="trust-rate">
          <span class="rlogo" aria-hidden="true"><svg viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span>
          <div>
            <div class="rrow"><span class="rnum">4.9</span><span class="rstars" aria-hidden="true">★★★★★</span></div>
            <div class="rlbl">65 reseñas en Google</div>
          </div>
        </div>
      </div>
      <div class="titem">
        <div class="trust-rate clutch">
          <span class="rlogo rlogo-clutch"><img src="<?php echo CAISSA_IMG; ?>/logo-clutch.svg" alt="Clutch" width="406" height="115" loading="lazy" decoding="async" /></span>
          <div>
            <div class="rrow"><span class="rnum">5.0</span><span class="rstars" aria-hidden="true">★★★★★</span></div>
            <div class="rlbl">Reseñas verificadas en Clutch</div>
          </div>
        </div>
      </div>
      <div class="titem">
        <div class="trust-stat">
          <div><div class="tnum">+50</div><div class="tlbl">empresas trabajan con nosotros</div></div>
        </div>
      </div>
      <div class="titem">
        <div class="trust-stat">
          <div><div class="tnum">+4 años</div><div class="tlbl">se queda un cliente, en promedio</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== RESEÑA DESTACADA =====================
     Paula Luzzi es la clienta más conocida del listado (CEO de Luzzi Digital, referente
     del marketing digital en habla hispana), y es la única reseña que habla del cambio
     completo en vez de una métrica. Por eso abre.
     La cita va COMPLETA y sin editar: §8.c registra que las reseñas atribuidas no se tocan. -->
<section class="sec-white">
  <div class="wrap">
    <div class="feat reveal">
      <div class="feat-av"><img src="<?php echo CAISSA_IMG; ?>/paula-luzzi.jpg" alt="Paula Luzzi, CEO de Luzzi Digital" width="400" height="400" loading="lazy" decoding="async" /></div>
      <div>
        <p class="feat-q">“No tengo palabras para describir lo que cambió mi empresa después de empezar a trabajar con Manu y su equipo. Obtuve mejores resultados, procesos más fluidos y un acompañamiento continuo de parte de profesionales que son expertos, con una experiencia increíble. Mi vida cambió después de ellos. Si están pensando en contratarlos, no lo duden ni un segundo.”</p>
        <div class="feat-w">
          <b>Paula Luzzi</b>
          <span>CEO · Luzzi Digital</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== VIDEOS =====================
     Carrusel infinito (pedido de Manuel, 25/08/2026: antes era grilla). El hover frena
     el marquee y agranda la tarjeta; el click abre el lightbox. Cada tarjeta vive DOS
     veces (el segundo grupo es el clon del loop): si editás una, editá las dos. -->
<section class="sec-soft" id="videos">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Testimonios en video</h2>
      <p>Entre uno y tres minutos por cliente, en su propia voz.</p>
    </div>
    <div class="vidmarquee reveal" aria-label="Testimonios en video de clientes de Caissa">
      <div class="vidtrack">
        <div class="vidgroup">
          <a class="vidcard" href="https://youtu.be/Z5jpdRI63DY" data-yt="Z5jpdRI63DY" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Colchonería Ideal">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-colcho.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+249%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Colchonería Ideal<span>Ventas online</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/-lwp7bWlWsU" data-yt="-lwp7bWlWsU" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Espacio Casa">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-espacio-casa.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+343%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Espacio Casa<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.png" alt="Espacio Casa" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/JmsoXM6RJ1Q" data-yt="JmsoXM6RJ1Q" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Axion Lift">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2023/09/review-axion-lift-01.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+400%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Axion Lift<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.png" alt="Axion Lift" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/RqmeH2SVeNo" data-yt="RqmeH2SVeNo" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Clean It">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cleanit.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+155%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Clean It<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cleanit.png" alt="Clean It" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/jx52kfHID5w" data-yt="jx52kfHID5w" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Neuros Center">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-neuro.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+300%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Neuros Center<span>Leads</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.png" alt="Neuros Center" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/9c2Mfic5VJA" data-yt="9c2Mfic5VJA" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cefil Pool">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cefil-pool-placeholder.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+210%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cefil Pool<span>Leads calificados</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/ZuG7lcUqWBc" data-yt="ZuG7lcUqWBc" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Constructora Cipolletti">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-constructora.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+407%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Constructora Cipolletti<span>Leads</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/sWErwVrvTP8" data-yt="sWErwVrvTP8" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cruzando Mares">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/02/caso-de-exito-cruzando-mares.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+85%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cruzando Mares<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.png" alt="Cruzando Mares" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
        </div>
        <!-- Segundo grupo: el clon que hace infinito el loop. aria-hidden y
             tabindex=-1 para que lectores de pantalla y Tab no lo repitan. -->
        <div class="vidgroup" aria-hidden="true">
          <a class="vidcard" tabindex="-1" href="https://youtu.be/Z5jpdRI63DY" data-yt="Z5jpdRI63DY" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Colchonería Ideal">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-colcho.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+249%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Colchonería Ideal<span>Ventas online</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/-lwp7bWlWsU" data-yt="-lwp7bWlWsU" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Espacio Casa">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-espacio-casa.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+343%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Espacio Casa<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.png" alt="Espacio Casa" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/JmsoXM6RJ1Q" data-yt="JmsoXM6RJ1Q" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Axion Lift">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2023/09/review-axion-lift-01.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+400%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Axion Lift<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.png" alt="Axion Lift" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/RqmeH2SVeNo" data-yt="RqmeH2SVeNo" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Clean It">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cleanit.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+155%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Clean It<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cleanit.png" alt="Clean It" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/jx52kfHID5w" data-yt="jx52kfHID5w" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Neuros Center">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-neuro.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+300%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Neuros Center<span>Leads</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.png" alt="Neuros Center" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/9c2Mfic5VJA" data-yt="9c2Mfic5VJA" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cefil Pool">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cefil-pool-placeholder.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+210%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cefil Pool<span>Leads calificados</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/ZuG7lcUqWBc" data-yt="ZuG7lcUqWBc" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Constructora Cipolletti">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-constructora.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+407%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Constructora Cipolletti<span>Leads</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/sWErwVrvTP8" data-yt="sWErwVrvTP8" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cruzando Mares">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/02/caso-de-exito-cruzando-mares.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+85%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cruzando Mares<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.png" alt="Cruzando Mares" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== GRUPO 1: RESULTADOS =====================
     La agrupación por objeción (resultado / trato / comprensión del negocio) es propia
     de esta página: la home agrupa los mismos clientes por INDUSTRIA. Es lo que evita
     que las dos páginas cuenten lo mismo. -->
<section class="bg-grad" id="resultados">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Nuestros resultados hablan solos</h2>
      <p>Cada métrica está medida en la cuenta del cliente que la firma.</p>
    </div>
    <div class="rvgrid">
      <article class="rv reveal">
        <div class="rv-m">+407%</div>
        <div class="rv-ml">en leads</div>
        <p class="rv-q">“Junto a Caissa, crecimos más rápido de lo que imaginamos.”</p>
        <div class="rv-w">
          <span class="rv-av">F</span>
          <div class="rv-wt"><b>Francisco</b><span>Socio · Constructora Cipolletti</span></div>
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+400%</div>
        <div class="rv-ml">en leads calificados</div>
        <p class="rv-q">“Caissa optimizó nuestros costos y ordenó nuestro seguimiento online.”</p>
        <div class="rv-w">
          <span class="rv-av">I</span>
          <div class="rv-wt"><b>Ignacio</b><span>Gerente de Marketing · Axion Lift</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.png" alt="Axion Lift" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+343%</div>
        <div class="rv-ml">en ventas</div>
        <p class="rv-q">“Ayudan a traducir todo el esfuerzo de la empresa en ventas. Lograron un ROAS récord. Son un gran aliado de nuestra empresa.”</p>
        <div class="rv-w">
          <span class="rv-av"><img class="av-espacio" src="<?php echo CAISSA_IMG; ?>/espacio-casa.jpg" alt="Pamela Cochia, cofundadora de Espacio Casa" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Pamela Cochia</b><span>Cofundadora · Espacio Casa</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.png" alt="Espacio Casa" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+249%</div>
        <div class="rv-ml">en ventas online</div>
        <p class="rv-q">“Superamos todas las expectativas y logramos récords en ventas. Gracias al caso de éxito lanzamos nuestro segundo e-commerce junto a ellos.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/colchoneria-ideal.jpg" alt="Juan París, E-commerce Manager de Colchonería Ideal" width="389" height="389" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Juan París</b><span>E-commerce Manager · Colchonería Ideal</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+210%</div>
        <div class="rv-ml">en leads calificados</div>
        <p class="rv-q">“Caissa nos consiguió unos costes por leads y por click verdaderamente eficientes.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/cefilpool.jpg" alt="Jon Uría, Cefil Pool" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Jon Uría</b><span>Dir. de ventas y marketing · Cefil Pool</span></div>
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">10x</div>
        <div class="rv-ml">en facturación · 3x en clientes</div>
        <p class="rv-q">“Fue un verdadero placer trabajar con ellos.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/guillermo.jpg" alt="Guillermo Oliveti, COO de GOIAR" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Guillermo Oliveti</b><span>COO · GOIAR</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/goiar-blanco.png" alt="GOIAR" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+85%</div>
        <div class="rv-ml">en ventas</div>
        <p class="rv-q">“Gracias a Caissa, mi empresa vende incluso cuando estoy de vacaciones.”</p>
        <div class="rv-w">
          <span class="rv-av">M</span>
          <div class="rv-wt"><b>Mariana Luaces</b><span>Cofundadora · Cruzando Mares</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.png" alt="Cruzando Mares" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">-35%</div>
        <div class="rv-ml">en costo por adquisición</div>
        <p class="rv-q">“Caissa transformó nuestra publicidad con transparencia y feedback constante.”</p>
        <div class="rv-w">
          <span class="rv-av">J</span>
          <div class="rv-wt"><b>Jaime</b><span>CEO · Over Option</span></div>
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+155%</div>
        <div class="rv-ml">en leads calificados</div>
        <p class="rv-q">“Hemos trabajado juntos desde el día uno, como si Caissa fuera parte de Clean It.”</p>
        <div class="rv-w">
          <span class="rv-av">JG<!-- FOTO: falta la de Juan Gonzalez Trück (Clean It). §9 lo tiene pendiente. --></span>
          <div class="rv-wt"><b>Juan Gonzalez Trück</b><span>Dueño · Clean It</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/cleanit.png" alt="Clean It" loading="lazy" decoding="async" />
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== GRUPO 2: EL TRATO ===================== -->
<section class="sec-white" id="trato">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo es trabajar con nosotros</h2>
      <p>Es la parte que no aparece en ningún reporte y la que hace que un cliente se quede cuatro años.</p>
    </div>
    <div class="rvgrid">
      <article class="rv reveal">
        <p class="rv-q">“Lo que más nos impresionó fue su calidad humana, su paciencia y su profesionalismo.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/ana.jpg" alt="Ana Kaltenbrunner, Brand Manager de El Club de la Milanesa" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Ana Kaltenbrunner</b><span>Brand Manager · El Club de la Milanesa</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/club-de-la-milanesa.png" alt="El Club de la Milanesa" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <p class="rv-q">“La comunicación es siempre muy rápida, y la respuesta también.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/camila.jpg" alt="Camila Jiménez, Marketing Manager de Youtooproject" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Camila Jiménez</b><span>Marketing Manager · Youtooproject</span></div>
        </div>
      </article>
      <article class="rv reveal">
        <p class="rv-q">“Estuvieron presentes, atentos y proactivos durante todo el proceso.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/pablo.jpg" alt="Pablo Marcovich, CEO de SAMBA" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Pablo Marcovich</b><span>CEO · SAMBA</span></div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== GRUPO 3: ENTENDER EL NEGOCIO ===================== -->
<section class="sec-soft" id="negocio">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Nos metemos en el negocio, no solo en la pauta</h2>
      <p>Dos rubros difíciles de explicar, entendidos antes del primer anuncio.</p>
    </div>
    <div class="rvgrid">
      <article class="rv reveal">
        <div class="rv-m">+300%</div>
        <div class="rv-ml">en leads</div>
        <p class="rv-q">“Ordenaron muy bien nuestra estrategia y aumentaron mucho nuestros clientes y conversiones.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/neuroscenter.jpg" alt="Sydney Pinoy, CEO de Neuros Center" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Sydney Pinoy</b><span>CEO · Neuros Center</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.png" alt="Neuros Center" loading="lazy" decoding="async" />
        </div>
      </article>
      <article class="rv reveal">
        <div class="rv-m">+30%</div>
        <div class="rv-ml">en consultas · +20-25% de ROI</div>
        <p class="rv-q">“Entienden nuestro negocio, nuestros objetivos y la dinámica del turismo.”</p>
        <div class="rv-w">
          <span class="rv-av"><img src="<?php echo CAISSA_IMG; ?>/silvana.jpg" alt="Silvana Ponce, fundadora de Latitud Ushuaia Travel" width="400" height="400" loading="lazy" decoding="async" /></span>
          <div class="rv-wt"><b>Silvana Ponce</b><span>Fundadora · Latitud Ushuaia Travel</span></div>
          <img width="220" height="108" class="rv-logo" src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.png" alt="Latitud Ushuaia Travel" loading="lazy" decoding="async" />
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== DÓNDE VERIFICARLO =====================
     Una página de opiniones donde la agencia elige qué opiniones mostrar vale poco si
     no podés contrastarla. Estos cuatro destinos son públicos y ninguno lo controlamos
     nosotros. También es lo que le da a un modelo de lenguaje dónde ir a chequear. -->
<section class="bg-grad" id="verificar">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Nuestros perfiles públicos</h2>
      <p>Las reseñas completas de Google y Clutch, y las credenciales que las respaldan.</p>
    </div>
    <div class="vrf reveal">
      <a href="https://www.google.com/search?q=Caissa+agencia+opiniones" target="_blank" rel="noopener">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="7" stroke-linecap="round"/><path d="M20 20l-3.5-3.5" stroke-linecap="round"/></svg></span>
        <b>Perfil de Empresa de Google</b>
        <span>Las 65 reseñas que promedian 4.9, con el nombre de cada persona.</span>
        <span class="go">Ver en Google <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
      <a href="https://clutch.co/profile/caissa" target="_blank" rel="noopener">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 3l2.6 5.6 6.4.8-4.7 4.3 1.2 6.3L12 17l-5.5 3 1.2-6.3L3 9.4l6.4-.8L12 3z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <b>Clutch</b>
        <span>Clutch entrevista a cada cliente por teléfono antes de publicar su reseña.</span>
        <span class="go">Ver en Clutch <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
      <a href="https://www.sortlist.es/agency/caissa" target="_blank" rel="noopener">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 6h16M4 12h16M4 18h10" stroke-linecap="round"/></svg></span>
        <b>Sortlist</b>
        <span>El directorio europeo de agencias, con su propio proceso de verificación.</span>
        <span class="go">Ver en Sortlist <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
      <a href="https://www.google.com/partners/agency?id=9889692537" target="_blank" rel="noopener">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M9 12.5l2.2 2.2L15.5 10" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="8.4"/></svg></span>
        <b>Directorio de Google Partners</b>
        <span>La ficha oficial de Caissa en el programa de Google Partners.</span>
        <span class="go">Ver la ficha <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </a>
    </div>
  </div>
</section>

<!-- ===================== FAQ =====================
     Abierta, sin acordeones (§4: Manu los rechazó, y el texto visible indexa mejor).
     Las cuatro preguntas son EXACTAMENTE las del FAQPage del JSON-LD: si editás una,
     editá la otra. -->
<section class="sec-white" id="faq">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Preguntas frecuentes</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Estas reseñas son reales?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, y por eso están firmadas con nombre, cargo y empresa. Las de Google y Clutch podés leerlas en esos perfiles, que no administramos nosotros. Los videos los grabaron los propios clientes y están publicados en nuestro canal de YouTube.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Puedo hablar con un cliente actual antes de contratarlos?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí. Pedilo en la consultoría gratuita y te ponemos en contacto con un cliente de un rubro parecido al tuyo. No mostramos referencias a cualquiera que lo pida, pero si estás evaluando en serio, es razonable que quieras hablar con alguien.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Por qué algunas reseñas no tienen un porcentaje?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Porque no todas las cuentas miden lo mismo. Publicamos el número solo cuando el cliente lo midió en su propia cuenta y nos autorizó a mostrarlo. Cuando la reseña habla del trato o del proceso y no hay una métrica atada, la dejamos sin número en vez de inventarle uno.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Estos resultados me los garantizan a mí?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>No. Cada cuenta arranca de un lugar distinto: el rubro, la competencia, el margen y lo que ya venías haciendo cambian mucho el punto de partida. Lo que sí podemos decirte antes de que firmes nada es qué vemos en tu cuenta y qué creemos que se puede mover. Eso es la consultoría gratuita.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="bg-grad">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>¿Querés resultados así?</h2>
      <p>Quince minutos con tu cuenta y una lectura honesta de qué se puede mejorar. Sin costo y sin compromiso.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <p class="rea">Sin contratos de permanencia.</p>
    </div>
  </div>
</section>

</main>

<?php
get_footer();