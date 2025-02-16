<footer class="footer">

    <div class="container-fluid d-flex justify-content-between">

      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © {{ date('Y') }}</span>

    </div>

  </footer>

  <!-- partial -->

</div>

<!-- main-panel ends -->

</div>

<!-- page-body-wrapper ends -->

</div>

<!-- container-scroller -->

<!-- plugins:js -->

<link rel="stylesheet" href=" {{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

<!-- endinject -->

<!-- Plugin js for this page -->

<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>

<!-- End plugin js for this page -->

<!-- inject:js -->

<script src="{{ asset('assets/js/off-canvas.js') }}"></script>

<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>

<script src="{{ asset('assets/js/misc.js') }}"></script>

<!-- endinject -->

<!-- Custom js for this page -->

<script src="{{ asset('assets/js/chart.js') }}"></script>

<!-- End custom js for this page -->


<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/buttons.dataTables.min.css') }}">





<script>

    tinymce.init({

    selector: 'textarea#example',

    height: 500,

    plugins: [

        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',

        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',

        'insertdatetime', 'media', 'table', 'help', 'wordcount'

    ],

    toolbar: 'undo redo | blocks | ' +

    'bold italic backcolor | alignleft aligncenter ' +

    'alignright alignjustify | bullist numlist outdent indent | ' +

    'removeformat | help',

    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'

    });

</script>





 <script>

    $(document).ready(function(){

        $('#example').dataTable({

            pageLength: 100,

            searching: true

        });
        $('#extable_dashboard').DataTable({

            "pageLength": 25
            });

        $('#extable3').DataTable({

        "pageLength": 50
        });

        $('#example2').dataTable({

            pageLength: 100,

            autoWidth: false,

            searching: true,

            responsive: true

        });



        $('#itemlist').dataTable({

            pageLength: 100,

            autoWidth: false,

            searching: true

        });



        $('#auctionlist').dataTable({

            pageLength: 50,

            autoWidth: false,

            searching: true

        });

       



        $('#exampleyu').dataTable({

            responsive: true

        });

    });





    </script>



<script>

    $(document).ready(function(){

        $("#limitation").change(function(){

            var lim = $("#limitation").val();



            if(lim=='Other')

            {

                $("#xother").show();

            }

            else

            {

                $("#xother").hide();

            }

        });

    });



    $(document).ready(function(){

        new DataTable('#example', {

        

            responsive: true,

            "info":     false,

            

        });

  

    });

    $(function() {

        $("#curr").on("change",function() {

            var curr   = this.value;

            var prefix = curr=="usd"; // or ["usd","yen",...].indexOf(curr); for more

            var sign   = curr=="usd"?"":"";

            $(".price").each(function(){

            $(this).text(

                (prefix?sign:"")   +

                $(this).data(curr) +

                (prefix?"":sign)

            );  

            })

        }).change();

    });



</script>





<!-- <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>

<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script> -->

<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->

<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<!-- endinject -->


<!-- Custom js for this page -->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>

<!-- End custom js for this page -->

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/responsive.bootstrap5.min.js') }}"></script>

<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.3.0/js/dataTables.rowGroup.min.js"></script>


<script>
  $(document).ready(function () {
    
    $('#extable3').DataTable(
        responsive: true,
    );
    
});
</script>

</body>

</html>

