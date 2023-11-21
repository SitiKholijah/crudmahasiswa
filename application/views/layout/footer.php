
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        </script>
        <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
            })
            </script>
    <script src="<?=base_url('assets/')?>plugins/common/common.min.js"></script>
    <script src="<?=base_url('assets/')?>js/custom.min.js"></script>
    <script src="<?=base_url('assets/')?>js/settings.js"></script>
    <script src="<?=base_url('assets/')?>js/gleek.js"></script>
    <script src="<?=base_url('assets/')?>js/styleSwitcher.js"></script>

</body>

</html>