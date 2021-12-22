<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="catch" _msthash="489203" _msttexthash="7096544">chatting every day on girls' favorite topics ♪</div>
            <form>
                <input type="text" name="q" id="q" value placeholder="seach for topics">
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>