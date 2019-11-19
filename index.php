<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GridLayout</title>
    <link rel="stylesheet" href="GridLayoutStyle.css" type="text/css">

    <script src="scripts/indexjs.js"></script>
    <link rel="stylesheet" type="text/css" href="css/imgzoom.css"/>
    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.imgzoom.pack.js"></script>
    <script type="text/javascript" src=".lib/jquery-3.4.1.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Anton|Biryani|Luckiest+Guy|Mansalva|Open+Sans:400i|Press+Start+2P&display=swap" rel="stylesheet">


</head>
<body>

<div class="container">

    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <h1>THE<span>SPACE</span></h1>
            </div>


            <ul class="navigation">
                <a href="http://www.google.com">
                    <li>Home</li>
                </a>
                <a href="about.html" onclick="basicPopup(this.href);return false">
                    <li>About</li>
                </a>
                <a href="ContactUs.html" onclick="basicPopup(this.href);return false">
                    <li>Contact</li>
                </a>
                <a href="Search.php" onclick="basicPopup(this.href);return false">
                    <li>Search Member</li>
                </a>

                <a href="AddMember.php" onclick="basicPopup(this.href);return false">
                    <li>Registration</li>
                </a>

            </ul>
        </div>
    </div>


    <!--Below is the Menu part-->
    <div class="menu">
        <div id="sidebar">
            <img src="Pictures/titlePic.png" alt="Space Rocket" width="90%">


            <h3 id="menuSolar">Solary System Gallery</h3>

            <ul>
                <li>
                    <a href="https://en.wikipedia.org/wiki/Sun">Sun <-</a>
                </li>

                <div class="sidebarPic">
                    <a href="Pictures/sun.jpg">

                        <img  class="thumbnail" src="Pictures/sun.jpg" title="The Sun is the star at the center of the Solar System.">

                    </a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Mercury_(planet)"></span>Mercury <-</a>
                </li>

                <div class="sidebarPic">
                    <a href="Pictures/Mercury.jpg">
                        <img class="thumbnail" src="Pictures/Mercury.jpg" title="Mercury is the smallest and innermost planet in the Solar System. Its orbit around the Sun takes only 87.97 days, the shortest of all the planets in the Solar System. It is named after the Roman deity Mercury, the messenger of the gods.">
                    </a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Venus"></span>Venus <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Venus.jpg"><img class="thumbnail" src="Pictures/Venus.jpg" title="Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty. As the second-brightest natural object in the night sky after the Moon, Venus can cast shadows and, rarely, is visible to the naked eye in broad daylight."></a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Earth"></span>Earth <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Earth.jpg"><img class="thumbnail" src="Pictures/Earth.jpg" title="Earth is our HOME, and it is the third planet from the Sun and the only astronomical object known to harbor life. According to radiometric dating and other sources of evidence, Earth formed over 4.5 billion years ago."></a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Mars"></span>Mars <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Mars.jpg"><img class="thumbnail" src="Pictures/Mars.jpg" title="Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System after Mercury. In English, Mars carries a name of the Roman god of war and is often referred to as the 'Red Planet'.The latter refers to the effect of the iron oxide prevalent on Mars' surface, which gives it a reddish appearance distinctive among the astronomical bodies visible to the naked eye."></a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Jupiter"></span>Jupiter <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Jupiter.jpg"><img class="thumbnail" src="Pictures/Jupiter.jpg" title="Jupiter is the fifth planet from the Sun and the largest in the Solar System. It is a gas giant with a mass one-thousandth that of the Sun, but two-and-a-half times that of all the other planets in the Solar System combined. Jupiter has been known to astronomers since antiquity. It is named after the Roman god Jupiter."></a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Saturn"></span>Saturn <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Saturn.jpg"><img class="thumbnail" src="Pictures/Saturn.jpg" title="Saturn is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter. It is a gas giant with an average radius about nine times that of Earth. It has only one-eighth the average density of Earth; however, with its larger volume, Saturn is over 95 times more massive."></a>
                </div>


                <li>
                    <a href="https://en.wikipedia.org/wiki/Uranus"></span>Uranus <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Uranus.jpg"><img class="thumbnail" src="Pictures/Uranus.jpg" title="Uranus (from the Latin name Ūranus for the Greek god Οὐρανός) is the seventh planet from the Sun. It has the third-largest planetary radius and fourth-largest planetary mass in the Solar System. Uranus is similar in composition to Neptune, and both have bulk chemical compositions which differ from that of the larger gas giants Jupiter and Saturn"></a>
                </div>

                <li>
                    <a href="https://en.wikipedia.org/wiki/Neptune"></span>Neptune <-</a>
                </li>
                <div class="sidebarPic">
                    <a href="Pictures/Neptune.jpg"><img class="thumbnail" src="Pictures/Neptune.jpg" title="Neptune is the eighth and farthest known planet from the Sun in the Solar System. In the Solar System, it is the fourth-largest planet by diameter, the third-most-massive planet and the densest giant planet. Neptune is 17 times the mass of Earth, slightly more massive than its near-twin Uranus."></a>
                </div>

            </ul>

        </div>


    </div>

    <div class="content" style="background-color: white;">
        <h2 id="headerStyle">History of exploration</h2>
        <div id="div-normal">
            <p>Space exploration is the discovery and exploration of celestial structures in outer space by developing
                and growing space technology. While the study of space is carried out mainly by astronomers with
                telescopes, the physical exploration of space is conducted both by unmanned robotic space probes and
                human spaceflight.</p>
            <br>

            <p>While the observation of objects in space, known as astronomy, predates reliable recorded history, it was
                the development of large and relatively efficient rockets during the mid-twentieth century that allowed
                physical space exploration to become a reality. Common rationales for exploring space include advancing
                scientific research, national prestige, uniting different nations, ensuring the future survival of
                humanity, and developing military and strategic advantages against other countries.</p>
            <br>

            <p>Space exploration has often been used as a proxy competition for geopolitical rivalries such as the Cold
                War. The early era of space exploration was driven by a "Space Race" between the Soviet Union and the
                United States. The launch of the first human-made object to orbit Earth, the Soviet Union's Sputnik 1,
                on 4 October 1957, and the first Moon landing by the American Apollo 11 mission on 20 July 1969 are
                often taken as landmarks for this initial period. The Soviet space program achieved many of the first
                milestones, including the first living being in orbit in 1957, the first human spaceflight (Yuri Gagarin
                aboard Vostok 1) in 1961, the first spacewalk (by Aleksei Leonov) on 18 March 1965, the first automatic
                landing on another celestial body in 1966, and the launch of the first space station (Salyut 1) in 1971.
                After the first 20 years of exploration, focus shifted from one-off flights to renewable hardware, such
                as the Space Shuttle program, and from competition to cooperation as with the International Space
                Station (ISS).</p>
            <br>

            <p>With the substantial completion of the ISS following STS-133 in March 2011, plans for space
                exploration by the U.S. remain in flux. Constellation, a Bush Administration program for a return to the
                Moon by 2020 was judged inadequately funded and unrealistic by an expert review panel reporting in
                2009. The Obama Administration proposed a revision of Constellation in 2010 to focus on the
                development of the capability for crewed missions beyond low Earth orbit (LEO), envisioning extending
                the operation of the ISS beyond 2020, transferring the development of launch vehicles for human crews
                from NASA to the private sector, and developing technology to enable missions to beyond LEO, such as
                Earth–Moon L1, the Moon, Earth–Sun L2, near-Earth asteroids, and Phobos or Mars orbit.</p>
            <br>

            <p>In the 2000s, the People's Republic of China initiated a successful manned spaceflight program, while the
                European Union, Japan, and India have also planned future crewed space missions. China, Russia, Japan,
                and India have advocated crewed missions to the Moon during the 21st century, while the European Union
                has advocated manned missions to both the Moon and Mars during the 20th and 21st century.</p>
            <br>

            <p>From the 1990s onwards, private interests began promoting space tourism and then public space exploration
                of the Moon (see Google Lunar X Prize).</p>
            <br>
        </div>


        <div>
            <div>
                <img src="Pictures/1000px-Atmosphere_layers-en.png" alt="AtmosphereLayer" width="250" class="fl"
                     id="imgID">
            </div>

            <div class="gallery fr">
                <a href="Pictures/1280px-Timeline_of_Solar_System_exploration.jpg"><img class="thumbnail"
                                                                                        src="Pictures/1280px-Timeline_of_Solar_System_exploration.jpg"
                                                                                        alt="" width="250" title="This is a timeline of Solar System exploration ordered by date of spacecraft launch. It includes:

All spacecraft that have left Earth orbit for the purposes of Solar System exploration (or were launched with that intention but failed), including lunar probes.
A small number of pioneering or notable Earth-orbiting craft.[vague]"></a>
                <div class="desc">Timeline of Solar System exploration.</div>
            </div>

            <div class="gallery fr">
                <a href="Pictures/1280px-Bumper8_launch-GPN-2000-000613.jpg"><img class="thumbnail"
                                                                                  src="Pictures/1280px-Bumper8_launch-GPN-2000-000613.jpg"
                                                                                  alt="" width="250" title="In July 1950 the first Bumper rocket is launched from Cape Canaveral, Florida. The Bumper was a two-stage rocket consisting of a Post-War V-2 topped by a WAC Corporal rocket. It could reach then-record altitudes of almost 400 km. Launched by General Electric Company, this Bumper was used primarily for testing rocket systems and for research on the upper atmosphere. They carried small payloads that allowed them to measure attributes including air temperature and cosmic ray impacts."></a>
                <div class="desc">
                    In July 1950 the first Bumper rocket is launched from Cape Canaveral, Florida. The Bumper was a
                    two-stage rocket consisting of a Post-War V-2 topped by a WAC Corporal rocket. It could reach
                    then-record altitudes of almost 400 km. Launched by General Electric Company, this Bumper was used
                    primarily for testing rocket systems and for research on the upper atmosphere. They carried small
                    payloads that allowed them to measure attributes including air temperature and cosmic ray impacts.
                </div>
            </div>

            <div class="gallery fr">
                <a href="Pictures/Apollo_CSM_lunar_orbit.jpg"><img class="thumbnail"
                                                                   src="Pictures/Apollo_CSM_lunar_orbit.jpg" alt=""
                                                                   width="250" title="The Apollo 15 Service Module as viewed from the Apollo Lunar Module. Image has been cropped and rotated."></a>
                <div class="desc">Sputnik 1, the first artificial satellite orbited Earth at 939 to 215 km (583 to 134
                    mi) in 1957, and was soon followed by Sputnik 2. See First satellite by country (Replica Pictured)
                </div>
            </div>

            <div class="gallery fr">
                <a href="Pictures/Sputnik_asm.jpg"><img class="thumbnail" src="Pictures/Sputnik_asm.jpg" alt=""
                                                        width="250" title="Sputnik 1 was the first artificial Earth satellite. The Soviet Union launched it into an elliptical low Earth orbit on 4 October 1957, orbiting for three weeks before its batteries died, then silently for two more months before falling back into the atmosphere. It was a 58 cm (23 in) diameter polished metal sphere, with four external radio antennas to broadcast radio pulses. Its radio signal was easily detectable even by radio amateurs,and the 65° inclination and duration of its orbit made its flight path cover virtually the entire inhabited Earth. "></a>
                <div class="desc">
                    Apollo CSM in lunar orbit
                </div>
            </div>

            <div class="gallery fr">
                <a href="Pictures/440px-Apollo_16_LM_Orion.jpg"><img class="thumbnail"
                                                                     src="Pictures/440px-Apollo_16_LM_Orion.jpg" alt=""
                                                                     width="250" class="imageContainer" title="Apollo 16 was the tenth crewed mission in the United States Apollo space program, the fifth and second-to-last to land on the Moon, and the second to land in the lunar highlands. The second of the so-called 'J missions', it was crewed by Commander John Young, Lunar Module Pilot Charles Duke and Command Module Pilot Ken Mattingly. Launched from the Kennedy Space Center in Florida at 12:54 PM EST on April 16, 1972, the mission lasted 11 days, 1 hour, and 51 minutes, and concluded at 2:45 PM EST on April 27."></a>
                <div class="desc">
                    Apollo 16 LEM Orion, the Lunar Roving Vehicle and astronaut John Young (1972).
                </div>
            </div>


            <div class="gallery fr">
                <a href="Pictures/300px-Aldrin_Apollo_11_original.jpg"><img class="thumbnail"
                                                                            src="Pictures/300px-Aldrin_Apollo_11_original.jpg"
                                                                            alt="" width="250" title="Buzz Aldrin is an American engineer and a former astronaut and fighter pilot. Aldrin made three spacewalks as pilot of the 1966 Gemini 12 mission, and as the Apollo Lunar Module pilot on the 1969 Apollo 11 mission, he and mission commander Neil Armstrong were the first two humans to land on the Moon."></a>
                <div class="desc">
                    Astronaut Buzz Aldrin had a personal Communion service when he first arrived on the surface of the
                    Moon.
                </div>
            </div>


            <div class="gallery fr">
                <a href="Pictures/440px-Spirit_rover_tracks.jpg"><img class="thumbnail"
                                                                      src="Pictures/440px-Spirit_rover_tracks.jpg"
                                                                      alt="" width="250" title="NASA's Mars Exploration Rover (MER) mission was a robotic space mission involving two Mars rovers, Spirit and Opportunity,exploring the planet Mars. It began in 2003 with the launch of the two rovers: MER-A Spirit and MER-B Opportunity—to explore the Martian surface and geology; both landed on Mars at separate locations in January 2004."></a>
                <div class="desc">
                    Concept art for a NASA Vision mission.
                </div>
            </div>


            <div>
                <h3 class="h3InMenu">Telescope</h3>
                <br>
                <p>The first telescope was invented in 1608 in the Netherlands by an eyeglass maker named Hans
                    Lippershey.[verification needed] The Orbiting Astronomical Observatory 2 was the first space
                    telescope launched on December 7, 1968. As of February 2, 2019, there are 3,891 confirmed
                    exoplanets discovered. The Milky Way is estimated to contain 100–400 billion stars and more than
                    100 billion planets. There are at least 2 trillion galaxies in the observable universe.
                    GN-z11 is the most distant known object from Earth, reported as 32 billion light-years
                    away.</p>
                <br>

                <h3 class="h3InMenu">First outer space flights</h3>
                <br>
                <p>The first successful orbital launch was of the Soviet uncrewed Sputnik 1 ("Satellite 1") mission on 4
                    October 1957. The satellite weighed about 83 kg (183 lb), and is believed to have orbited Earth at a
                    height of about 250 km (160 mi). It had two radio transmitters (20 and 40 MHz), which emitted
                    "beeps" that could be heard by radios around the globe. Analysis of the radio signals was used to
                    gather information about the electron density of the ionosphere, while temperature and pressure data
                    was encoded in the duration of radio beeps. The results indicated that the satellite was not
                    punctured by a meteoroid. Sputnik 1 was launched by an R-7 rocket. It burned up upon re-entry on 3
                    January 1958.</p>
                <br>

                <h3 class="h3InMenu">First human outer space flight</h3>
                <br>
                <p>The first successful human spaceflight was Vostok 1 ("East 1"), carrying 27-year-old Russian
                    cosmonaut Yuri Gagarin on 12 April 1961. The spacecraft completed one orbit around the globe,
                    lasting about 1 hour and 48 minutes. Gagarin's flight resonated around the world; it was a
                    demonstration of the advanced Soviet space program and it opened an entirely new era in space
                    exploration: human spaceflight.</p>
                <br>

                <h3 class="h3InMenu">First astronomical body space explorations</h3>
                <br>
                <p>The first artificial object to reach another celestial body was Luna 2 reaching the Moon in 1959. The first soft landing on another celestial body was performed by Luna 9 landing on the Moon on
                    February 3, 1966. Luna 10 became the first artificial satellite of the Moon, entering Moon Orbit
                    on April 3, 1966. </p>
                <br>

                <p>The first crewed landing on another celestial body was performed by Apollo 11 on July 20, 1969,
                    landing on the Moon. There have been a total of six spacecraft with humans landing on the Moon
                    starting from 1969 to the last human landing in 1972.</p>
                <br>

                <p>The first interplanetary flyby was the 1961 Venera 1 flyby of Venus, though the 1962 Mariner 2 was
                    the first flyby of Venus to return data (closest approach 34,773 kilometers). Pioneer 6 was the
                    first satellite to orbit the Sun, launched on December 16, 1965. The other planets were first flown
                    by in 1965 for Mars by Mariner 4, 1973 for Jupiter by Pioneer 10, 1974 for Mercury by Mariner 10,
                    1979 for Saturn by Pioneer 11, 1986 for Uranus by Voyager 2, 1989 for Neptune by Voyager 2. In 2015,
                    the dwarf planets Ceres and Pluto were orbited by Dawn and passed by New Horizons, respectively.
                    This accounts for flybys of each of the eight planets in our Solar System, the Sun, the Moon and
                    Ceres & Pluto (2 of the 5 recognized dwarf planets).</p>
                <br>

                <h3 class="h3InMenu">First space station</h3>
                <br>
                <p>Salyut 1 was the first space station of any kind, launched into low Earth orbit by the Soviet Union
                    on April 19, 1971. The International Space Station is currently the only fully functional space
                    station, with continuous inhabitance since the year 2000.</p>
                <br>

                <h3 class="h3InMenu">First interstellar space flight</h3>
                <br>
                <p>Voyager 1 became the first human-made object to leave our Solar System into interstellar space on
                    August 25, 2012. The probe passed the heliopause at 121 AU to enter interstellar space.</p>
                <br>


                <h3 class="h3InMenu">Farthest from Earth </h3>
                <br>
                <p>The Apollo 13 flight passed the far side of the Moon at an altitude of 254 kilometers (137 nautical
                    miles) above the lunar surface, and 400,171 km (248,655 mi) from Earth, marking the record for the
                    farthest humans have ever traveled from Earth in 1970.</p>

                <p>Voyager 1 is currently at a distance of 145.11 astronomical units (2.1708×1010 km; 1.3489×1010 mi)
                    (21.708 billion kilometers; 13.489 billion miles) from Earth as of January 1, 2019. It is the
                    most distant human-made object from Earth.</p>

                <p>GN-z11 is the most distant known object from Earth, reported as 13.4 billion light-years
                    away.</p>
                <br>

                <h3 class="h3InMenu">Key people in early space exploration</h3>
                <br>
                <p>The dream of stepping into the outer reaches of Earth's atmosphere was driven by the fiction of Jules
                    Verne and H. G. Wells, and rocket technology was developed to try to realize this
                    vision. The German V-2 was the first rocket to travel into space, overcoming the problems of thrust
                    and material failure. During the final days of World War II this technology was obtained by both the
                    Americans and Soviets as were its designers. The initial driving force for further development of
                    the technology was a weapons race for intercontinental ballistic missiles (ICBMs) to be used as
                    long-range carriers for fast nuclear weapon delivery, but in 1961 when the Soviet Union launched the
                    first man into space, the United States declared itself to be in a "Space Race" with the
                    Soviets.</p>
                <br>

                <p>Konstantin Tsiolkovsky, Robert Goddard, Hermann Oberth, and Reinhold Tiling laid the groundwork of
                    rocketry in the early years of the 20th century.</p>
                <br>

                <p>Wernher von Braun was the lead rocket engineer for Nazi Germany's World War II V-2 rocket project. In
                    the last days of the war he led a caravan of workers in the German rocket program to the American
                    lines, where they surrendered and were brought to the United States to work on their rocket
                    development ("Operation Paperclip"). He acquired American citizenship and led the team that
                    developed and launched Explorer 1, the first American satellite. Von Braun later led the team at
                    NASA's Marshall Space Flight Center which developed the Saturn V moon rocket.</p>
                <br>

                <p>Initially the race for space was often led by Sergei Korolev, whose legacy includes both the R7 and
                    Soyuz—which remain in service to this day. Korolev was the mastermind behind the first satellite,
                    first man (and first woman) in orbit and first spacewalk. Until his death his identity was a closely
                    guarded state secret; not even his mother knew that he was responsible for creating the Soviet space
                    program.</p>
                <br>

            </div>
        </div>
    </div>


        <!--Footer part-->
    <div class="footer">
        <div id="footerSection">

            <div class="footcontainer">
                <div class="footrow">
                    <div class="span3">
                        <h5>QUICK LINKS</h5>
                        <ul>
                            <li><a href="ContactUs.html">CONTACT</a></li>
                            <li><a href="AddMember.php">REGISTRATION</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Notice">LEGAL NOTICE</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Terms_of_service">TERMS AND CONDITIONS</a></li>
                        </ul>

                    </div>

                    <div class="span3">
                        <h5>INFORMATION</h5>
                        <ul>
                            <li><a href="https://en.wikipedia.org/wiki/Solar_System">SOLAR SYSTEM</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Galaxy">GALAXY</a></li>
                        </ul>

                    </div>

                    <div class="span3">
                        <h5>LATEST NEWS</h5>
                        <ul>
                            <li><a href="https://en.wikipedia.org/wiki/Solar_System">EVENTS</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Galaxy">PUBLICATIONS</a></li>
                            <li><a href="https://en.wikipedia.org/wiki/Galaxy">MAGAZINES</a></li>
                        </ul>

                    </div>


                    <div id="socialMedia" class="span3">
                        <h5>SOCIAL MEDIA</h5>
                        <a href="https://www.facebook.com/spaceexploration/"> <img width="40" src="Pictures/facebook.png"  title="facebook"></a>
                        <a href="https://twitter.com/hashtag/spaceexploration"> <img width="40" src="Pictures/twitter.png"  title="twitter"></a>
                        <a href="https://www.youtube.com/results?search_query=space+exploration"> <img width="40" src="Pictures/youtube.png"  title="youtube"></a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <p class="pull-right">&copy; THESPACE 2019</p>
            </div>
        </div>
    </div>
</div>

<script src="scripts/main.js" type="text/javascript"></script>
<script src="scripts/my.js" type="text/javascript"></script>

</body>
</html>
