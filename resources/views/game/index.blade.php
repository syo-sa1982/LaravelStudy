<!DOCTYPE html>
<html>
<head>
    <title>Hello Cocos2d-JS</title>
</head>
<body>
    <h2>cocos2dのサンプル</h2>
    <canvas id="gameCanvas" width="800" height="450"></canvas>
    <script type="text/javascript" src="../js/cocos2d-js-v3.13-lite.js" charset="UTF-8"></script>
    <script type="text/javascript">
          window.onload = function(){
              cc.game.onStart = function(){
                  //load resources
                  cc.LoaderScene.preload(["../images/HelloWorld.png"], function () {
                      var MyScene = cc.Scene.extend({
                          onEnter:function () {
                              this._super();
                              var size = cc.director.getWinSize();
                              var sprite = cc.Sprite.create("../images/HelloWorld.png");
                              sprite.setPosition(size.width / 2, size.height / 2);
                              sprite.setScale(0.8);
                              this.addChild(sprite, 0);

                              var label = cc.LabelTTF.create("Hello World", "Arial", 40);
                              label.setPosition(size.width / 2, size.height / 2);
                              this.addChild(label, 1);
                          }
                      });
                      cc.director.runScene(new MyScene());
                  }, this);
              };
              cc.game.run("gameCanvas");
          };
    </script>
</body>
</html>