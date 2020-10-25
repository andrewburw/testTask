<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="manifest" href="/manifest.json" />
  <title>Test Task</title>
</head>

<body>
  <div class="flex_container">
    <div class="flex_item_left">
      <div class="container">
        <header class="header">
          <div class="header__logo"><object type="image/svg+xml" class="logoWithText" data="images/svgLogo.svg">Your browser does not support SVG</object>
             <object type="image/svg+xml" class="logoNoText" data="../images/logo_pineapple.svg">Your browser does not support SVG</object></div>
          <div class="nav">
            <ul class="nav__menu">
              <li class="nav__menu-item"><a href="#">About</a></li>
              <li class="nav__menu-item"><a href="#">How it works</a></li>
              <li class="nav__menu-item"><a href="#">Contact</a></li>
            </ul>
          </div>
        </header>
        <noscript> <?

        require_once 'php/noJStemplate.php';

        ?></noscript>
        <div id="root"></div>
      </div>
    </div>
    <div class="flex_item_right"></div>
    <div>
      <script>
        ! function(e) {
          function t(t) {
            for (var n, l, a = t[0], f = t[1], i = t[2], c = 0, s = []; c < a.length; c++) l = a[c], Object.prototype.hasOwnProperty.call(o, l) && o[l] && s.push(o[l][0]), o[l] = 0;
            for (n in f) Object.prototype.hasOwnProperty.call(f, n) && (e[n] = f[n]);
            for (p && p(t); s.length;) s.shift()();
            return u.push.apply(u, i || []), r()
          }

          function r() {
            for (var e, t = 0; t < u.length; t++) {
              for (var r = u[t], n = !0, a = 1; a < r.length; a++) {
                var f = r[a];
                0 !== o[f] && (n = !1)
              }
              n && (u.splice(t--, 1), e = l(l.s = r[0]))
            }
            return e
          }
          var n = {},
            o = {
              1: 0
            },
            u = [];

          function l(t) {
            if (n[t]) return n[t].exports;
            var r = n[t] = {
              i: t,
              l: !1,
              exports: {}
            };
            return e[t].call(r.exports, r, r.exports, l), r.l = !0, r.exports
          }
          l.m = e, l.c = n, l.d = function(e, t, r) {
            l.o(e, t) || Object.defineProperty(e, t, {
              enumerable: !0,
              get: r
            })
          }, l.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
              value: "Module"
            }), Object.defineProperty(e, "__esModule", {
              value: !0
            })
          }, l.t = function(e, t) {
            if (1 & t && (e = l(e)), 8 & t) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (l.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
              }), 2 & t && "string" != typeof e)
              for (var n in e) l.d(r, n, function(t) {
                return e[t]
              }.bind(null, n));
            return r
          }, l.n = function(e) {
            var t = e && e.__esModule ? function() {
              return e.default
            } : function() {
              return e
            };
            return l.d(t, "a", t), t
          }, l.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
          }, l.p = "/";
          var a = this["webpackJsonptest-task"] = this["webpackJsonptest-task"] || [],
            f = a.push.bind(a);
          a.push = t, a = a.slice();
          for (var i = 0; i < a.length; i++) t(a[i]);
          var p = f;
          r()
        }([])
      </script>
      <script src="/static/js/2.524e5e2c.chunk.js"></script>
      <script src="/static/js/main.3fc7ca52.chunk.js"></script>
    </div>
  </div>
</body>

</html>
