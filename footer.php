      </main>
      <footer>
        <!-- Footer -->
      </footer>
    </div>
    <?php wp_footer(); ?>
    <?php if(is_front_page()): ?>
    <script type="text/javascript">
    var flky = new Flickity('.carousel', {
      autoPlay: true,
      pageDots: false,
      cellSelector: '.carousel__cell',
      imagesLoaded: true
    });
    </script>
    <?php endif; ?>
  </body>
</html>
