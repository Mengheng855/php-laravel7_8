        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>Copyright 2026 <?php echo isset($brand_title) ? $brand_title : 'adminHMD'; ?>. <br> Developed by <a target="_blank" class="fw-bold text-success"
              href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a target="_blank"
              class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a> </span>
          <span><?php echo (isset($layout_variant) && $layout_variant === 'store') ? 'Computer shopping experience.' : 'Professional dashboard template.'; ?></span>
          <?php if (isset($footer_subtext)) : ?>
            <span><?php echo $footer_subtext; ?></span>
          <?php endif; ?>
        </div>
      </footer>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
