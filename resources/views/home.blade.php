<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sistem Keamanan Laboratorium</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Security System</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0)" onclick="load_page('')">Home</a></li>
                    <li><a href="javascript:void(0)">Data Mahasiswa</a></li>
                    <li><a href="javascript:void(0)">History Akses</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        </div>
    </nav>
    <div class="container" id="app">
        <div class="jumbotron">
            <div class="container" id="divUtama">
                
            </div>
        </div>

    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        var server = "{{ url('') }}/";

        load_page('beranda');
        
        function load_page(page)
        {
            $("#divUtama").html("Memuat halaman ...");
            $("#divUtama").load(server + page);
        }
        
        function pesanUmumApp(icon, title, text)
        {
        Swal.fire({
            icon : icon,
            title : title,
            text : text
        });
        }

        function confirmQuest(icon, title, text, x)
        {
            Swal.fire({
                title: title,
                text: text,
                icon: icon,
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
            }).then((result) => {
                if (result.value) {
                    x();
                }
            });
        }
    </script>
</body>

</html>