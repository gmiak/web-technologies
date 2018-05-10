<footer id="site-footer">

<hr/>

  <div class="byline">

         <p><img src="img/mesmall.jpg" alt="me-small" />
         <span class="jag"><strong>Georges Kayembe</strong> <em> En student som har börjat läsa webbprogrammering vid Blekinge Tekniska Högskola.
           Han har tidigare läst teknikprogrammet (Informations- och medieteknik) vid Fässbergymnasiet i Möldal.
           På kvällarna Georges sysllar med webbutveckling genom att utveckla sina projekt och bygga hemsidor till exempel
           www.easyfysik.se </em>
         </span></p>
  </div>

  <div class="socialNetwork">
    <p> <strong>Följa mig på : </strong></p>
    <p><a href=""><img src="img/facebook.png" alt="facebook-logo"></a>
    <a href=""><img src="img/instagram.png" alt="instagram-logo"></a>
    <a href=""><img src="img/twitter.png" alt="twitter-logo"></a>
    <a href=""><img src="img/youtube.png" alt="youtube-logo"></a></p>
  </div>


    <div class="lankar">

         <p>
           Validatorer :
         <a href="http://validator.w3.org/check/referer">HTML5</a>
         <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
         <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a><br/>
           Specifikationer :
         <a href="https://www.w3.org/TR/2014/REC-html5-20141028/">HTML5</a>
         <a href="https://www.w3.org/TR/html4/">HTML4</a>
         <a href="https://www.w3.org/Style/CSS/current-work">CSS3</a>
         <a href="https://drafts.csswg.org/css2/">CSS2.2</a>
         <a href="https://www.w3.org/TR/CSS21/">CSS2.1</a>
         <a href="https://www.w3.org/2009/cheatsheet/">Cheatsheet </a>
       </p>
       <p>
                <?php $numFiles= count(get_included_files());
                $memoryUsed= memory_get_peak_usage(true);
                $loadTime= microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];?>
      </p>
       <p> Time to load page: <?=$loadTime?>. Files included: <?=$numFiles?>. Memory used: <?=$memoryUsed?>. </p>

       <p><em>copyright &copy; 2016 Georges Kayembe (kayss.g@gmail.com)</em></p>
  </div>


</footer>

</body>
</html>
