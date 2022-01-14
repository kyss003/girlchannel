<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- @yield('scripts') -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }} ">
</head>
<body>
    <header>
        <div class="title">
            <a href="/">
                Girls Channel
            </a>
        </div>
    </header>
    <nav>
        <div class="header-nav">
            <div class="catch">女子の好きな話題で毎日おしゃべり♪</div>
            <form action="{{ route('topics.search')}}" method="GET">
                <input type="text" name="query" id="query" value placeholder="seach for topics">
                <div class="search">
                    <div class="icon-search">
                        <img src="https://img.icons8.com/ios/20/000000/search--v1.png"/>
                    </div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </nav>
    @yield('body')
    <div class="footer">
            <div class="footer-logo">
                <a href="/">
                    Girls Channel
                </a>
            </div>
            <div class="links">
                <a href="#">operating</a>
                <a href="#">contact</a>
                <a href="#">faq terms</a>
                <a href="#">of use</a>
            </div>
        </div>
        <div id="scrollToTop" class="scroll-to-top" style="right: 98px;" show="on">
            <span class="icon-arrow_t">
                
            </span>
        </div>
    </div>
</body>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
        //sorting
        $(document).ready(function(){
            $('#sortselect').on('change',function(){
                var url_string = $(this).val();
                var url = new URL(url_string);
                if(url) {
                    window.location = url;
                }
                return false;
            });
            $('#dateselect').on('change',function(){
                var url_string = $(this).val();
                var url = new URL(url_string);
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '/' + mm + '/' + dd
                if(url) {
                    window.location = url;
                }
                return false;
            });
        });
    </script> 
@yield('scripts')
</html>