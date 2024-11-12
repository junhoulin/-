## 🌏網頁製作需求
- 活動時間 2024/07/05 - 2024/10/30
- 專案製作時間  2024/06/14 - 2024/06/26
### 前端網站
1. 報名參加活動 - 讓客戶輕鬆輸入個人資料，快速完成報名流程，享受流暢無縫的體驗。
2. 活動資訊查詢 - 提供專屬頁面，讓客戶輕鬆掌握活動內容與詳情，第一時間獲取最新資訊。
3. 報名狀態查詢 - 客戶可方便地查詢報名進度與最終結果，確保掌握報名情況。
### 後端網站
1. 後端登入帳號密碼 - 用戶可以通過帳號與密碼來進行登入。後端系統會驗證這些憑證，確保只有經授權的使用者才能訪問系統。
2. 後端資料彙整與格式化 - 系統會從資料庫中提取各種資料，並進行彙整和格式化。
3. 後端可修改資料 - 對後端資料進行修改，包括新增、編輯或刪除操作。
## 📖前端網站
- 使用HTML、JS、CSS進行前後端頁面製作
- 前端頁面設計主要依據客戶提供的素材，確保設計符合客戶需求與品牌風格。
- 使用 RESTful API 進行資料傳送，透過 HTTP 方法（POST）

![前端畫面1](https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmckoxDd9JRAbPhvSLgsF3FMNgk1NeNovYxcYxofedqUBQ/index1.png "前端畫面1")
## 🎮後端網站
- 使用 PHP 的 Session 技術來實現用戶登入驗證。

![後端畫面1](https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmckoxDd9JRAbPhvSLgsF3FMNgk1NeNovYxcYxofedqUBQ/admin1.png "後端畫面1")
- 用戶在首次登錄時，伺服器會創建 Session 並將用戶的登入狀態保存在 Session 中，從而實現多頁面之間的登入狀態保持。
- 在每個頁面加載時，會進行驗證，確保只有已登錄的用戶可以訪問受限頁面。若用戶未登錄，將會被重定向至登入頁面。
- 使用 RESTful API，透過 HTTP 方法（POST、update、delete) 進行資料操作

![後端畫面2](https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmckoxDd9JRAbPhvSLgsF3FMNgk1NeNovYxcYxofedqUBQ/admin2.png "後端畫面2")

![後端畫面3](https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmckoxDd9JRAbPhvSLgsF3FMNgk1NeNovYxcYxofedqUBQ/admin4.png "後端畫面3")

## 🎰AWS SERVER建置
### 使用 AWS Lightsail 運算服務
1. 這是一個簡單且具擴展性的雲端運算服務，提供虛擬機、網路和儲存服務，適合中小型應用。
2. AWS Lightsail 提供穩定的計算資源，能夠快速啟動並且具有良好的成本效益，免費三個月。

### 系統使用 Linux，建置 LAMP (PHP 8) 環境
1. 使用 Apache 作為 Web 伺服器，提供穩定的頁面展示和靜態檔案處理能力。
2. 使用PHP作為後端的程式語言，負責處理網站的業務邏輯。

### 資料庫使用 MySQL，並設定欄位
1. 系統使用 MySQL 資料庫來存儲資料，並為各資料表設定適當的欄位與索引。
2. 資料庫設計針對具體需求，設置了合適的資料結構，保證數據的完整性和查詢效能。

### 將資料庫設定為只能內網連接
1. 為了加強資料庫的安全性，將 MySQL 資料庫 設定為僅允許 內部網路連接。
2. 外部無法直接訪問資料庫，這樣能夠降低資料洩露或被外部攻擊的風險。

### 新增 SSH 遠端操作方法
1. 遠端操作工具：Putty、FileZilla。
2. 使用 Putty 進行遠端命令行操作，管理伺服器並執行系統維護任務。
3. 使用 FileZilla 進行檔案傳輸，方便上傳與下載伺服器上的檔案。

### 新增 SSL 驗證以啟用 HTTPS
1. 設置 SSL 驗證 來保護網站的安全性，啟用 HTTPS 協議。
2. 保證網站與用戶之間的資料傳輸加密，防止中途被竊取或篡改。

### 註冊 DNS (2024treasure)，並指派到 IP 位置
1. 註冊 2024treasure 作為網站的域名，並將其指向 AWS Lightsail 提供的靜態 IP 地址。

![server畫面](https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmckoxDd9JRAbPhvSLgsF3FMNgk1NeNovYxcYxofedqUBQ/lightstail.png "server畫面")
