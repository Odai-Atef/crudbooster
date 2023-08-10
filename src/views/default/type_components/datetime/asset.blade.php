@push('bottom')

    <script type="text/javascript">
        $(function() {
            $('.input_datetime').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                timePickerIncrement: 1,
                timePicker24Hour: true,
                autoApply: false,
                showDropdowns: true,
                locale: {
                    format: "YYYY-MM-DD HH:mm:ss",
                },

            });
        });
    </script>
@endpush
