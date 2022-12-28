<script type="text/javascript">
    (function($) {
        $(function() {
            $('.money').mask('#.##0', {
                reverse: true
            });
            $('.phone').mask('000-0000-00000');
        });
    })(jQuery);
</script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/dashboard/js/plugins/perfect-scrollbar.min.js"></script>

</body>

</html>