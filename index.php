<!DOCTYPE html>
<html>
  <head>
    <title>Codenames Background with Moving Light</title>
    <style>
      body {
        background: #000;
        overflow: hidden;
      }

      .light {
        position: absolute;
        top: 0;
        left: 0;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 100%);
        box-shadow: 0 0 100px 50px rgba(255, 255, 255, 0.8), 0 0 50px 20px rgba(255, 255, 255, 0.5);
        transform: translate(-50%, -50%);
        animation: moveLight 10s ease-in-out infinite alternate;
      }

      @keyframes moveLight {
        0% {
          transform: translate(-50%, -50%) translate(50px, 50px);
        }
        25% {
          transform: translate(-50%, -50%) translate(550px, 50px);
        }
        50% {
          transform: translate(-50%, -50%) translate(550px, 350px);
        }
        75% {
          transform: translate(-50%, -50%) translate(50px, 350px);
        }
        100% {
          transform: translate(-50%, -50%) translate(50px, 50px);
        }
      }
    </style>
  </head>
  <body>
    <div class="light"></div>
  </body>
</html>
