
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{asset('assets/js/require.min.js')}}"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <script>
        const basePath = "{{asset('assets/js/') }}";
    </script>
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{asset('assets/plugins/maps-google/plugin.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/plugins/maps-google/plugin.js')}}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>
    <style>
        .custom-col {
            flex: 0 0 20%;
            max-width: 20%;
        }
        .cover__anime{
            max-height: 320px;
            width: 100%;
            height: 100%;
        }
        .image-container {
            position: relative;
            display: inline-block;
            width: 100%;
            height: auto;
        }

        .image-container img {
            max-height: 320px;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5); /* Optional dark overlay */
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .overlay .episode {
            background-color: #333;
            padding: 5px 10px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .overlay .date {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .overlay .day {
            background-color: #007bff;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
        }

        .overlay .title {
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: auto;
        }
    </style>