                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>

    <tbody>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  const tdElements = document.querySelectorAll('.show-popup');
  const overlay = document.getElementById('overlay');
  const popupCard = document.getElementById('popup-card');
  const popupContent = document.getElementById('popup-content');

  tdElements.forEach(function(td) {
    td.addEventListener('click', function() {
      const tujuanText = this.getAttribute('data-tujuan');
      popupContent.textContent = tujuanText;

      overlay.style.display = 'block';
      popupCard.style.display = 'block';
    });
  });

  // Fungsi untuk menutup popup
  function closePopup() {
    overlay.style.display = 'none';
    popupCard.style.display = 'none';
  }

  // Menutup popup saat overlay di klik
  overlay.addEventListener('click', function(event) {
    if (event.target === overlay) {
      closePopup();
    }
  });

  // Menutup popup saat simbol silang diklik
  const closeBtn = document.querySelector('.close-button');
  closeBtn.addEventListener('click', closePopup);
});
</script>

</body>

</html>