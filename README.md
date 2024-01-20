# アプリケーション名
<勤怠管理アプリ>  
会員の勤務時間、休憩時間が記録できるアプリ
<img width="1680" alt="スクリーンショット 2024-01-20 23 49 26" src="https://github.com/katsukishiori/attendance/assets/145991391/79b7f586-8310-4ecb-9ebb-37f4de2fa95b">

## 作成した目的
ある企業の人事評価の為

## アプリケーションURL  
開発環境:http://localhost/  
phpMyAdmin:http://localhost:8080/  

## 機能一覧  
ログイン機能  
日を跨いだ時点で翌日の出勤操作に切り替える　　
１日に何度でも休憩可能　　  
ページネーションで５件ずつ取得　　　　　　

## 使用技術（実行環境）  
・PHP　8.2.12
・Laravel 8.83.27  

## ER図  
<img width="505" alt="スクリーンショット 2024-01-08 15 09 11" src="https://github.com/katsukishiori/attendance/assets/145991391/889b4201-c9b0-4aee-b424-3ef1f7fd4d7a">

## 環境構築
###dockerビルド  
docker-compose up -d --build  

###Laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3.env.exampleファイルから.envファイルを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migrate
6.php artisan db:seed
