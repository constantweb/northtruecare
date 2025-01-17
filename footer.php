<footer id="site-footer" class="contacts">
      <div class="container">
          <div class="contacts__content">
              <div class="contacts__info">
                  <div class="contacts__services">
                      <h4 class="contacts__title">Services</h4>
                      <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu',
                'container'      => '',
                'menu_class'        => 'footer-menu',
              )
            );
          ?>
                  </div>
                  <div class="contacts__working">
                      <p class="contacts__working--day">Available every day</p>
                      <p class="contacts__working--time">9:00 AM to 9:00 PM</p>
                  </div>
                  <a class="contacts__email" href="">northtruecareinc@gmail.com</a>
                  <a class="contacts__phone" href="">+1(825)-945-8835</a>
                  <ul class="contacts__social social">
                      <li class="social__item">
                          <a class="social__link" href="">
                              <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 20 20"><path fill="#fff" fill-rule="evenodd" d="M5.87.123C4.242.196 2.83.594 1.69 1.729.548 2.869.155 4.286.081 5.897.037 6.902-.231 14.498.545 16.49a5.04 5.04 0 0 0 2.91 2.903c.634.246 1.356.412 2.416.461 8.86.401 12.145.183 13.53-3.364.246-.631.415-1.353.462-2.41.405-8.883-.066-10.809-1.61-12.351C17.027.507 15.586-.325 5.87.123m.081 17.944c-.97-.043-1.496-.205-1.848-.341a3.255 3.255 0 0 1-1.888-1.883c-.591-1.514-.395-8.703-.342-9.866.051-1.14.282-2.18 1.086-2.985C3.954 2 5.24 1.513 13.993 1.908c1.142.052 2.186.282 2.992 1.084.995.993 1.489 2.288 1.087 11.008-.044.968-.206 1.493-.342 1.843-.901 2.308-2.973 2.628-11.779 2.224M14.09 4.69c0 .657.534 1.19 1.194 1.19.66 0 1.195-.533 1.195-1.19a1.194 1.194 0 0 0-2.39 0M4.864 9.988a5.103 5.103 0 0 0 5.11 5.097 5.103 5.103 0 0 0 5.109-5.097 5.102 5.102 0 0 0-5.11-5.096 5.102 5.102 0 0 0-5.11 5.096m1.794 0A3.313 3.313 0 0 1 9.972 6.68a3.313 3.313 0 0 1 3.317 3.308 3.313 3.313 0 0 1-3.317 3.31 3.313 3.313 0 0 1-3.316-3.31"/></svg>
                          </a>
                      </li>
                      <li class="social__item">
                          <a class="social__link" href="">
                              <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="-5 0 20 20"><path fill="#fff" fill-rule="evenodd" d="M6.821 20v-9h2.733L10 7H6.821V5.052C6.821 4.022 6.848 3 8.287 3h1.458V.14c0-.043-1.253-.14-2.52-.14C4.58 0 2.924 1.657 2.924 4.7V7H0v4h2.923v9h3.898Z"/></svg>
                          </a>
                      </li>
                  </ul>
                  <p class="contacts__copyright">© 2024 North True Care. | Site by K</p>
              </div>
              <div class="contacts__form form">
                  <h3 class="form__title">Get a free quote</h3>
                  <?php echo do_shortcode('[contact-form-7 id="b72843b" title="Contact form main"]'); ?>
              </div>
          </div>
      </div>
</footer>