<?php
/* Template name: О бренде */
get_header();
?>

    <section class="about-banner" style="background-image: url('<?php the_field( 'banner-image' ); ?>')">
        <div class="about-banner__contents container">
            <div class="contents__content">
                <div class="content__title">О бренде <span>ST OIL</span></div>
                <div class="content__info"><?php the_field( 'banner-info' ); ?></div>
            </div>
        </div>
    </section>

    <section class="about-history">
        <div class="about-history__contents container">
            <div class="contents__image">
                <img src="<?php the_field( 'history-image' ); ?>">
            </div>
            <div class="contents__content">
                <div class="content__title">История <span>успеха</span></div>
                <div class="content__image">
                    <img src="<?php the_field( 'history-image' ); ?>">
                </div>
                <div class="content__info"><?php the_field( 'history-info' ); ?></div>
            </div>
        </div>
    </section>

    <section class="about-timeline">
        <div class="about-timeline__contents container">
            <div class="contents__timeline">
                <div class="timeline__firsts">

                    <?php if ( have_rows( 'timeline-first' ) ) : ?>
                        <?php while ( have_rows( 'timeline-first' ) ) : the_row(); ?>
                            <svg class="firsts__open-first openInfo" data-counter="counter-1" width="280" height="139" viewBox="0 0 280 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="path-1-inside-1_1003_5671" fill="white">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M273 115C276.866 115 280 111.866 280 108V7.00002C280 3.13403 276.866 2.26142e-05 273 2.22762e-05L7.00001 0C3.13401 0 9.77963e-06 3.13401 9.44166e-06 7L0 108C0 111.866 3.134 115 7 115H38.0082L51.5 139L64.9918 115L273 115Z"/>
                                </mask>
                                <path d="M273 115V117V115ZM273 2.22762e-05V-1.99998V2.22762e-05ZM7.00001 0V-2V0ZM9.44166e-06 7H2.00001H9.44166e-06ZM0 108H-2H0ZM38.0082 115L39.7516 114.02L39.1783 113H38.0082V115ZM51.5 139L49.7566 139.98L51.5 143.081L53.2434 139.98L51.5 139ZM64.9918 115V113H63.8217L63.2484 114.02L64.9918 115ZM278 108C278 110.761 275.761 113 273 113V117C277.971 117 282 112.971 282 108H278ZM278 7.00002V108H282V7.00002H278ZM273 2.00002C275.761 2.00002 278 4.23859 278 7.00002H282C282 2.02947 277.971 -1.99998 273 -1.99998V2.00002ZM7.00001 2L273 2.00002V-1.99998L7.00001 -2V2ZM2.00001 7C2.00001 4.23858 4.23859 2 7.00001 2V-2C2.02945 -2 -1.99999 2.02943 -1.99999 7H2.00001ZM2 108L2.00001 7H-1.99999L-2 108H2ZM6.99999 113C4.23857 113 2 110.761 2 108H-2C-2 112.971 2.02943 117 6.99999 117V113ZM38.0082 113H6.99999V117H38.0082V113ZM53.2434 138.02L39.7516 114.02L36.2648 115.98L49.7566 139.98L53.2434 138.02ZM63.2484 114.02L49.7566 138.02L53.2434 139.98L66.7352 115.98L63.2484 114.02ZM273 113L64.9918 113V117L273 117V113Z" fill="#7AB92F" mask="url(#path-1-inside-1_1003_5671)"/>
                                <text class="title" x="20" y="30"><?php the_sub_field( 'first-years' ); ?></text>
                                <foreignObject x="20" y="44" width="240" height="55">
                                    <div xmlns="http://www.w3.org/1999/xhtml" class="info"><?php the_sub_field( 'first-info' ); ?></div>
                                </foreignObject>
                            </svg>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if ( have_rows( 'timeline-second' ) ) : ?>
                        <?php while ( have_rows( 'timeline-second' ) ) : the_row(); ?>
                            <svg class="firsts__open-second openInfo" data-counter="counter-2" width="280" height="139" viewBox="0 0 280 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="path-1-inside-1_2396_9366" fill="white">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M273 24C276.866 24 280 27.134 280 31V132C280 135.866 276.866 139 273 139L7.00001 139C3.13402 139 9.77963e-06 135.866 9.44166e-06 132L0 31C0 27.134 3.134 24 6.99999 24H38.0082L51.5 0L64.9918 24L273 24Z"/>
                                </mask>
                                <path d="M273 24L273 22H273V24ZM273 139L273 141L273 139ZM7.00001 139L7.00001 137L7.00001 139ZM9.44166e-06 132L2.00001 132L9.44166e-06 132ZM0 31L-2 31V31H0ZM38.0082 24L39.7516 24.9801L39.1783 26H38.0082V24ZM51.5 -9.53674e-07L49.7566 -0.980069L51.5 -4.08135L53.2434 -0.980069L51.5 -9.53674e-07ZM64.9918 24L64.9918 26L63.8217 26L63.2484 24.9801L64.9918 24ZM278 31C278 28.2386 275.761 26 273 26V22C277.971 22 282 26.0294 282 31H278ZM278 132V31H282V132H278ZM273 137C275.761 137 278 134.761 278 132H282C282 136.971 277.971 141 273 141L273 137ZM7.00001 137L273 137L273 141L7.00001 141L7.00001 137ZM2.00001 132C2.00001 134.761 4.23859 137 7.00001 137L7.00001 141C2.02945 141 -1.99999 136.971 -1.99999 132L2.00001 132ZM2 31L2.00001 132L-1.99999 132L-2 31L2 31ZM6.99999 26C4.23857 26 2 28.2386 2 31H-2C-2 26.0295 2.02943 22 6.99999 22V26ZM38.0082 26H6.99999V22H38.0082V26ZM53.2434 0.980067L39.7516 24.9801L36.2648 23.02L49.7566 -0.980069L53.2434 0.980067ZM63.2484 24.9801L49.7566 0.980067L53.2434 -0.980069L66.7352 23.0199L63.2484 24.9801ZM273 26L64.9918 26L64.9918 22L273 22L273 26Z" fill="#7AB92F" mask="url(#path-1-inside-1_2396_9366)"/>
                                <text class="title" x="20" y="51"><?php the_sub_field( 'first-years' ); ?></text>
                                <foreignObject x="20" y="65" width="240" height="55">
                                    <div xmlns="http://www.w3.org/1999/xhtml" class="info"><?php the_sub_field( 'first-info' ); ?></div>
                                </foreignObject>
                            </svg>

                        <?php endwhile; ?>
                    <?php endif; ?>

                    <svg class="firsts__svg" width="246" height="347" viewBox="0 0 246 347" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="105" y1="186" x2="105" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="141" y1="186" x2="141" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="159" y1="186" x2="159" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="177" y1="186" x2="177" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="69" y1="186" x2="69" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="195" y1="246" x2="195" y2="149" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="87" y1="186" x2="87" y2="162" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="123" y1="198" x2="123" y2="149" stroke="#7AB92F" stroke-width="2"/>
                        <line x1="51" y1="198" x2="51" y2="101" stroke="#7AB92F" stroke-width="2"/>


                        <g class="first-unactive closedInfo" data-counter="counter-1">
                            <mask id="path-10-inside-1_1003_5671" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M93 70C96.866 70 100 66.866 100 63L100 7.00001C100 3.13402 96.866 7.35541e-06 93 7.01744e-06L7.00001 0C3.13402 0 5.84561e-06 3.13401 5.50763e-06 7L0 63C0 66.866 3.13401 70 7 70H38.0082L51.5 94L64.9918 70H93Z"/>
                            </mask>
                            <path d="M100 63H98H100ZM100 7.00001L102 7.00001V7.00001H100ZM93 7.01744e-06V-1.99999V7.01744e-06ZM7.00001 0V-2V0ZM5.50763e-06 7H2.00001H5.50763e-06ZM0 63H-2H0ZM38.0082 70L39.7516 69.0199L39.1783 68H38.0082V70ZM51.5 94L49.7566 94.9801L51.5 98.0814L53.2434 94.9801L51.5 94ZM64.9918 70V68H63.8217L63.2484 69.0199L64.9918 70ZM98 63C98 65.7614 95.7614 68 93 68V72C97.9706 72 102 67.9706 102 63H98ZM98 7.00001L98 63H102L102 7.00001L98 7.00001ZM93 2.00001C95.7614 2.00001 98 4.23858 98 7.00001H102C102 2.02944 97.9706 -1.99999 93 -1.99999V2.00001ZM7.00001 2L93 2.00001V-1.99999L7.00001 -2V2ZM2.00001 7C2.00001 4.23858 4.23858 2 7.00001 2V-2C2.02944 -2 -1.99999 2.02944 -1.99999 7H2.00001ZM2 63L2.00001 7H-1.99999L-2 63H2ZM7 68C4.23858 68 2 65.7614 2 63H-2C-2 67.9706 2.02944 72 7 72V68ZM38.0082 68H7V72H38.0082V68ZM53.2434 93.0199L39.7516 69.0199L36.2648 70.9801L49.7566 94.9801L53.2434 93.0199ZM63.2484 69.0199L49.7566 93.0199L53.2434 94.9801L66.7352 70.9801L63.2484 69.0199ZM93 68H64.9918V72H93V68Z" fill="#B5B5B5" mask="url(#path-10-inside-1_1003_5671)"/>
                            <?php if ( have_rows( 'timeline-first' ) ) : ?>
                                <?php while ( have_rows( 'timeline-first' ) ) : the_row(); ?>
                                    <text x="30" y="40"><?php the_sub_field( 'first-years' ); ?></text>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </g>


                        <g class="first-unactive closedInfo" data-counter="counter-2">
                            <mask id="path-12-inside-2_1003_5671" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M153 277C149.134 277 146 280.134 146 284L146 340C146 343.866 149.134 347 153 347L239 347C242.866 347 246 343.866 246 340L246 284C246 280.134 242.866 277 239 277L207.992 277L194.5 253L181.008 277L153 277Z"/>
                            </mask>
                            <path d="M146 284L148 284L146 284ZM153 277L153 275L153 277ZM146 340L144 340L144 340L146 340ZM153 347L153 349L153 347ZM239 347L239 349L239 347ZM246 340L244 340L246 340ZM246 284L248 284L246 284ZM239 277L239 279L239 277ZM207.992 277L206.248 277.98L206.822 279L207.992 279L207.992 277ZM194.5 253L196.243 252.02L194.5 248.919L192.757 252.02L194.5 253ZM181.008 277L181.008 279L182.178 279L182.752 277.98L181.008 277ZM148 284C148 281.239 150.239 279 153 279L153 275C148.029 275 144 279.029 144 284L148 284ZM148 340L148 284L144 284L144 340L148 340ZM153 345C150.239 345 148 342.761 148 340L144 340C144 344.971 148.029 349 153 349L153 345ZM239 345L153 345L153 349L239 349L239 345ZM244 340C244 342.761 241.761 345 239 345L239 349C243.971 349 248 344.971 248 340L244 340ZM244 284L244 340L248 340L248 284L244 284ZM239 279C241.761 279 244 281.239 244 284L248 284C248 279.029 243.971 275 239 275L239 279ZM207.992 279L239 279L239 275L207.992 275L207.992 279ZM192.757 253.98L206.248 277.98L209.735 276.02L196.243 252.02L192.757 253.98ZM182.752 277.98L196.243 253.98L192.757 252.02L179.265 276.02L182.752 277.98ZM153 279L181.008 279L181.008 275L153 275L153 279Z" fill="#B5B5B5" mask="url(#path-12-inside-2_1003_5671)"/>
                            <?php if ( have_rows( 'timeline-second' ) ) : ?>
                                <?php while ( have_rows( 'timeline-second' ) ) : the_row(); ?>
                                    <text x="173" y="320"><?php the_sub_field( 'first-years' ); ?></text>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </g>
                    </svg>
                </div>
                <div class="timeline__more">
                    <?php if (have_rows('timeline-last')) : ?>
                        <?php $counter = 3; ?>
                        <?php while (have_rows('timeline-last')) : the_row(); ?>
                            <?php if ($counter % 2 == 1) : ?>
                                <div class="active-up">
                                    <svg class="active-up__info openInfo" data-counter="counter-<?php echo $counter; ?>" width="280" height="139" viewBox="0 0 280 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_2400_9367<?php echo $counter; ?>" fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M273 115C276.866 115 280 111.866 280 108V7.00002C280 3.13403 276.866 2.26142e-05 273 2.22762e-05L7.00001 0C3.13402 0 9.77963e-06 3.13401 9.44166e-06 7L0 108C0 111.866 3.134 115 6.99999 115H38.0082L51.5 139L64.9918 115L273 115Z"/>
                                        </mask>
                                        <path d="M273 115L273 117H273V115ZM273 2.22762e-05L273 -1.99998L273 2.22762e-05ZM7.00001 0L7.00001 -2H7.00001V0ZM9.44166e-06 7L2.00001 7L9.44166e-06 7ZM0 108L-2 108V108H0ZM38.0082 115L39.7516 114.02L39.1783 113H38.0082V115ZM51.5 139L49.7566 139.98L51.5 143.081L53.2434 139.98L51.5 139ZM64.9918 115L64.9918 113L63.8217 113L63.2484 114.02L64.9918 115ZM278 108C278 110.761 275.761 113 273 113V117C277.971 117 282 112.971 282 108H278ZM278 7.00002V108H282V7.00002H278ZM273 2.00002C275.761 2.00002 278 4.23859 278 7.00002H282C282 2.02947 277.971 -1.99998 273 -1.99998L273 2.00002ZM7.00001 2L273 2.00002L273 -1.99998L7.00001 -2L7.00001 2ZM2.00001 7C2.00001 4.23858 4.23859 2 7.00001 2V-2C2.02945 -2 -1.99999 2.02943 -1.99999 7L2.00001 7ZM2 108L2.00001 7L-1.99999 7L-2 108L2 108ZM6.99999 113C4.23857 113 2 110.761 2 108H-2C-2 112.971 2.02943 117 6.99999 117V113ZM38.0082 113H6.99999V117H38.0082V113ZM53.2434 138.02L39.7516 114.02L36.2648 115.98L49.7566 139.98L53.2434 138.02ZM63.2484 114.02L49.7566 138.02L53.2434 139.98L66.7352 115.98L63.2484 114.02ZM273 113L64.9918 113L64.9918 117L273 117L273 113Z" fill="#7AB92F" mask="url(#path-1-inside-1_2400_9367<?php echo $counter; ?>)"/>
                                        <text class="title" x="20" y="30"><?php the_sub_field( 'last-years' ); ?></text>
                                        <foreignObject x="20" y="44" width="240" height="55">
                                            <div xmlns="http://www.w3.org/1999/xhtml" class="info"><?php the_sub_field( 'last-info' ); ?></div>
                                        </foreignObject>
                                    </svg>

                                    <svg class="active-up__timeline" width="176" height="198" viewBox="0 0 176 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="1" y1="186" x2="1" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="73" y1="186" x2="73" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="19" y1="186" x2="19" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="37" y1="186" x2="37" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="55" y1="198" x2="55" y2="149" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="91" y1="186" x2="91" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="109" y1="186" x2="109" y2="162" stroke="#7AB92F" stroke-width="2"/>
                                        <line x1="127" y1="198" x2="127" y2="101" stroke="#7AB92F" stroke-width="2"/>
                                        <g class="active-up__btn closedInfo" data-counter="counter-<?php echo $counter; ?>">
                                            <mask id="path-9-inside-1_1003_5671" fill="white">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M169 70C172.866 70 176 66.866 176 63L176 7.00001C176 3.13402 172.866 7.35541e-06 169 7.01744e-06L83 0C79.134 0 76 3.13401 76 7L76 63C76 66.866 79.134 70 83 70H114.008L127.5 94L140.992 70H169Z"/>
                                            </mask>
                                            <path d="M176 63H174H176ZM176 7.00001L178 7.00001V7.00001H176ZM169 7.01744e-06V-1.99999V7.01744e-06ZM83 0V-2V0ZM76 7H78H76ZM76 63H74H76ZM114.008 70L115.752 69.0199L115.178 68H114.008V70ZM127.5 94L125.757 94.9801L127.5 98.0814L129.243 94.9801L127.5 94ZM140.992 70V68H139.822L139.248 69.0199L140.992 70ZM174 63C174 65.7614 171.761 68 169 68V72C173.971 72 178 67.9706 178 63H174ZM174 7.00001L174 63H178L178 7.00001L174 7.00001ZM169 2.00001C171.761 2.00001 174 4.23858 174 7.00001H178C178 2.02944 173.971 -1.99999 169 -1.99999V2.00001ZM83 2L169 2.00001V-1.99999L83 -2V2ZM78 7C78 4.23858 80.2386 2 83 2V-2C78.0294 -2 74 2.02944 74 7H78ZM78 63L78 7H74L74 63H78ZM83 68C80.2386 68 78 65.7614 78 63H74C74 67.9706 78.0294 72 83 72V68ZM114.008 68H83V72H114.008V68ZM129.243 93.0199L115.752 69.0199L112.265 70.9801L125.757 94.9801L129.243 93.0199ZM139.248 69.0199L125.757 93.0199L129.243 94.9801L142.735 70.9801L139.248 69.0199ZM169 68H140.992V72H169V68Z" fill="#B5B5B5" mask="url(#path-9-inside-1_1003_5671)"/>
                                            <text x="104" y="40"><?php the_sub_field( 'last-years' ); ?></text>
                                        </g>
                                    </svg>
                                </div>
                            <?php else : ?>
                            <div class="active-bottom">
                                <svg class="active-bottom__info openInfo" data-counter="counter-<?php echo $counter; ?>" width="280" height="139" viewBox="0 0 280 139" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_2396_9366<?php echo $counter; ?>" fill="white">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M273 24C276.866 24 280 27.134 280 31V132C280 135.866 276.866 139 273 139L7.00001 139C3.13402 139 9.77963e-06 135.866 9.44166e-06 132L0 31C0 27.134 3.134 24 6.99999 24H38.0082L51.5 0L64.9918 24L273 24Z"/>
                                    </mask>
                                    <path d="M273 24L273 22H273V24ZM273 139L273 141L273 139ZM7.00001 139L7.00001 137L7.00001 139ZM9.44166e-06 132L2.00001 132L9.44166e-06 132ZM0 31L-2 31V31H0ZM38.0082 24L39.7516 24.9801L39.1783 26H38.0082V24ZM51.5 -9.53674e-07L49.7566 -0.980069L51.5 -4.08135L53.2434 -0.980069L51.5 -9.53674e-07ZM64.9918 24L64.9918 26L63.8217 26L63.2484 24.9801L64.9918 24ZM278 31C278 28.2386 275.761 26 273 26V22C277.971 22 282 26.0294 282 31H278ZM278 132V31H282V132H278ZM273 137C275.761 137 278 134.761 278 132H282C282 136.971 277.971 141 273 141L273 137ZM7.00001 137L273 137L273 141L7.00001 141L7.00001 137ZM2.00001 132C2.00001 134.761 4.23859 137 7.00001 137L7.00001 141C2.02945 141 -1.99999 136.971 -1.99999 132L2.00001 132ZM2 31L2.00001 132L-1.99999 132L-2 31L2 31ZM6.99999 26C4.23857 26 2 28.2386 2 31H-2C-2 26.0295 2.02943 22 6.99999 22V26ZM38.0082 26H6.99999V22H38.0082V26ZM53.2434 0.980067L39.7516 24.9801L36.2648 23.02L49.7566 -0.980069L53.2434 0.980067ZM63.2484 24.9801L49.7566 0.980067L53.2434 -0.980069L66.7352 23.0199L63.2484 24.9801ZM273 26L64.9918 26L64.9918 22L273 22L273 26Z" fill="#7AB92F" mask="url(#path-1-inside-1_2396_9366<?php echo $counter; ?>)"/>
                                    <text class="title" x="20" y="51"><?php the_sub_field( 'last-years' ); ?></text>
                                    <foreignObject x="20" y="65" width="240" height="55">
                                        <div xmlns="http://www.w3.org/1999/xhtml" class="info"><?php the_sub_field( 'last-info' ); ?></div>
                                    </foreignObject>
                                </svg>

                                <svg width="178" height="198" viewBox="0 0 178 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1" y1="37" x2="1" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="73" y1="37" x2="73" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="19" y1="37" x2="19" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="91" y1="37" x2="91" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="37" y1="37" x2="37" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="109" y1="37" x2="109" y2="13" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="55" y1="49" x2="55" y2="9.57215e-08" stroke="#7AB92F" stroke-width="2"/>
                                    <line x1="127" y1="97" x2="127" y2="-4.96527e-08" stroke="#7AB92F" stroke-width="2"/>
                                    <g class="active-bottom__btn closedInfo" data-counter="counter-<?php echo $counter; ?>">
                                        <mask id="path-10-inside-1_2390_9365" fill="white">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M85 128C81.134 128 78 131.134 78 135L78 191C78 194.866 81.134 198 85 198L171 198C174.866 198 178 194.866 178 191L178 135C178 131.134 174.866 128 171 128L139.992 128L126.5 104L113.008 128L85 128Z"/>
                                        </mask>
                                        <path d="M78 135L80 135L78 135ZM85 128L85 126L85 128ZM78 191L76 191L76 191L78 191ZM85 198L85 200L85 198ZM171 198L171 200L171 198ZM178 191L176 191L178 191ZM178 135L180 135L178 135ZM139.992 128L138.248 128.98L138.822 130L139.992 130L139.992 128ZM126.5 104L128.243 103.02L126.5 99.9186L124.757 103.02L126.5 104ZM113.008 128L113.008 130L114.178 130L114.752 128.98L113.008 128ZM80 135C80 132.239 82.2386 130 85 130L85 126C80.0294 126 76 130.029 76 135L80 135ZM80 191L80 135L76 135L76 191L80 191ZM85 196C82.2386 196 80 193.761 80 191L76 191C76 195.971 80.0294 200 85 200L85 196ZM171 196L85 196L85 200L171 200L171 196ZM176 191C176 193.761 173.761 196 171 196L171 200C175.971 200 180 195.971 180 191L176 191ZM176 135L176 191L180 191L180 135L176 135ZM171 130C173.761 130 176 132.239 176 135L180 135C180 130.029 175.971 126 171 126L171 130ZM139.992 130L171 130L171 126L139.992 126L139.992 130ZM124.757 104.98L138.248 128.98L141.735 127.02L128.243 103.02L124.757 104.98ZM114.752 128.98L128.243 104.98L124.757 103.02L111.265 127.02L114.752 128.98ZM85 130L113.008 130L113.008 126L85 126L85 130Z" fill="#B5B5B5" mask="url(#path-10-inside-1_2390_9365)"/>
                                        <text x="107" y="171"><?php the_sub_field( 'last-years' ); ?></text>
                                    </g>
                                </svg>
                            </div>
                            <?php endif; ?>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contents__last-timeline">
                <svg width="204" height="97" viewBox="0 0 204 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="37" x2="1" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="75" y1="37" x2="75" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="148" y1="37" x2="148" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="20" y1="37" x2="20" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="94" y1="37" x2="94" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="167" y1="37" x2="167" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="39" y1="37" x2="39" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="112" y1="37" x2="112" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="185" y1="37" x2="185" y2="13" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="57" y1="49" x2="57" y2="9.57215e-08" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="203" y1="49" x2="203" y2="9.57215e-08" stroke="#B5B5B5" stroke-width="2"/>
                    <line x1="130" y1="97" x2="130" y2="-4.37114e-08" stroke="#B5B5B5" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </section>

    <section class="about-application">
        <div class="about-application__first-image">
            <?= file_get_contents(wp_get_attachment_image_url(get_field( 'left-background' ))); ?>
        </div>
        <div class="about-application__second-image">
            <?= file_get_contents(wp_get_attachment_image_url(get_field( 'right-background' ))); ?>
        </div>
        <div class="about-application__contents container">
            <div class="contents__title">Сферы <span>применения</span></div>
            <div class="contents__content noslider">
                <?php if ( have_rows( 'application-body' ) ) : ?>
                    <?php while ( have_rows( 'application-body' ) ) : the_row(); ?>
                        <div class="content__card">
                            <div class="card__image">
                                <img src="<?php the_sub_field( 'body-image' ); ?>">
                            </div>
                            <div class="card__text"><?php the_sub_field( 'body-info' ); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="contents__content slider swiper swiper-application">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'application-body' ) ) : ?>
                        <?php while ( have_rows( 'application-body' ) ) : the_row(); ?>
                            <div class="swiper-slide content__card">
                                <div class="card__image">
                                    <img src="<?php the_sub_field( 'body-image' ); ?>">
                                </div>
                                <div class="card__text"><?php the_sub_field( 'body-info' ); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper-management">
                <div class="management__prev">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.75 1.5L1.25 9L8.75 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="management__next">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.25 16.5L8.75 9L1.25 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="about-items">
        <div class="about-items__contents container">
            <div class="contents__standard">
                <div class="standard__title">Наши <span>стандарты</span></div>
                <div class="standard__body">
                    <div class="body__info"><?php the_field( 'standard-info' ); ?></div>
                    <div class="body__items">
                        <?php if ( have_rows( 'standard-body' ) ) : ?>
                            <?php $counter = 1; ?>
                            <?php while ( have_rows( 'standard-body' ) ) : the_row(); ?>
                                <?php $number = sprintf("%02d", $counter);?>
                                <div class="items__item">
                                    <div class="item__sign">
                                        <svg class="line" width="2" height="500" viewBox="0 0 2 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="1" y1="4.37114e-08" x2="0.999978" y2="500" stroke="#7AB92F" stroke-width="2"/>
                                        </svg>
                                        <svg class="sign" width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="35.5" cy="35.5" r="34.5" fill="white" stroke="#7AB92F" stroke-width="2"/>
                                            <text x="15.5" y="44.5"><?php echo $number; ?></text>
                                        </svg>
                                    </div>
                                    <div class="item__info"><?php the_sub_field( 'body-info' ); ?></div>
                                </div>
                                <?php $counter++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="contents__approach">
                <div class="approach__title">Наш <span>подход</span></div>
                <div class="approach__body">
                    <div class="body__info"><?php the_field( 'approach-info' ); ?></div>
                    <div class="body__items">
                        <?php if ( have_rows( 'approach-body' ) ) : ?>
                            <?php while ( have_rows( 'approach-body' ) ) : the_row(); ?>
                                <div class="items__item">
                                    <div class="item__sign">
                                        <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 40C12.5021 40 8.54392 38.4972 5.1255 35.4915C1.70708 32.4858 -0.00141579 28.4175 8.80282e-07 23.2866C8.80282e-07 20.0594 1.275 16.5605 3.825 12.7898C6.375 9.01911 10.2354 4.94268 15.4063 0.56051C15.6188 0.390658 15.8667 0.254777 16.15 0.152866C16.4333 0.0509555 16.7167 0 17 0C17.2833 0 17.5667 0.0509555 17.85 0.152866C18.1333 0.254777 18.3813 0.390658 18.5938 0.56051C23.7646 4.94268 27.625 9.01911 30.175 12.7898C32.725 16.5605 34 20.0594 34 23.2866C34 28.4161 32.2908 32.4844 28.8724 35.4915C25.454 38.4985 21.4965 40.0014 17 40ZM17 35.9236C20.5771 35.9236 23.5967 34.7516 26.0589 32.4076C28.521 30.0637 29.7514 27.0234 29.75 23.2866C29.75 20.8747 28.7052 18.1143 26.6156 15.0054C24.526 11.8964 21.3208 8.44026 17 4.63694C12.6792 8.44161 9.47396 11.8984 7.38438 15.0074C5.29479 18.1163 4.25 20.8761 4.25 23.2866C4.25 27.0234 5.48108 30.0637 7.94325 32.4076C10.4054 34.7516 13.4243 35.9236 17 35.9236ZM17.5844 33.8853C18.0094 33.8514 18.3727 33.6897 18.6745 33.4003C18.9762 33.1108 19.1264 32.763 19.125 32.3567C19.125 31.8811 18.9656 31.4986 18.6469 31.2092C18.3281 30.9197 17.9208 30.7927 17.425 30.828C15.9729 30.9299 14.4323 30.5474 12.8031 29.6805C11.174 28.8136 10.1469 27.2428 9.72188 24.9682C9.65104 24.5945 9.46546 24.2887 9.16513 24.051C8.86479 23.8132 8.51913 23.6943 8.12813 23.6943C7.63229 23.6943 7.225 23.873 6.90625 24.2303C6.5875 24.5877 6.48125 25.0035 6.5875 25.4777C7.18958 28.569 8.60625 30.7771 10.8375 32.1019C13.0688 33.4268 15.3177 34.0212 17.5844 33.8853Z" fill="#7AB92F"/>
                                        </svg>
                                    </div>
                                    <div class="item__info">
                                        <?php the_sub_field( 'body-info' ); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-advantages">
        <div class="about-advantages__contents container">
            <div class="contents__title">
                Комплекс выгодных<br>
                <span>преимуществ</span>
            </div>
            <div class="contents__content">
                <?php if ( have_rows( 'advantages-body' ) ) : ?>
                    <?php while ( have_rows( 'advantages-body' ) ) : the_row(); ?>
                        <div class="content__card">
                            <div class="card__icon"><?= file_get_contents(get_sub_field( 'body-image' )); ?></div>
                            <div class="card__text"><?php the_sub_field( 'body-text' ); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="about-news">
        <div class="about-news__contents container">
            <div class="contents__title">
                <div class="title__text">Новости и события</div>
                <a class="title__button" href="<?php echo get_category_link('4') ?>">Больше новостей →</a>
            </div>
            <div class="contents__content">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a class="content__card" href="<?php echo get_permalink(); ?>">
                            <div class="card__image"><?php the_post_thumbnail(); ?></div>
                            <div class="card__info">
                                <div class="info__date"><?php echo get_the_date();?></div>
                                <div class="info__title"><?php the_title(); ?></div>
                                <div class="info__more"><?php the_excerpt(); ?></div>
                            </div>
                        </a>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
            <a class="contents__button" href="<?php echo get_category_link('4') ?>">Больше новостей →</a>
        </div>
    </section>

<?php
get_footer();
?>

