@push('bottom')

    <script type="text/javascript">
        $(function () {
            $('.input_date').datepicker({
                format: 'yyyy-mm-dd'
            });

            $('.open-datetimepicker').click(function () {
                $(this).next('.input_date').datepicker('show');
            });

        });

    </script>
@endpush
