<footer class="app-footer">
    <div class="wrapper">
        <span>Admin Control Panel Hạt Điều<a href="#"><i class="fa fa-long-arrow-up"></i></a></span>
        <span class="pull-right"><?= date('Y') ?> Copyright.</span>
    </div>
</footer>

<div>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('/js/app-backend.js') }}"></script>
    {!! Rapyd::scripts() !!}
</div>