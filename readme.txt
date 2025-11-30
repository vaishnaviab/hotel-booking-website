# Online Hotel Reservation (PHP + MySQL)

A simple hotel booking web application made using **WAMP** and **VS Code**.  
The system has two sides: **User** and **Admin**.

---

## Features

### User Side
- View available rooms
- View room details
- Book rooms online
- View other details of Hotel(pictures,rules and regulations, contact detail)

### Admin Side
Access at:  
`http://localhost/Online_Hotel_Reservation/admin`

Admin can:
- Add / Edit / Delete rooms  
- Add / Edit / Delete other admins  
- Manage bookings in 3 sections:
  - **Pending** – new booking requests  
  - **Check-in** – confirmed & staying guests  
  - **Check-out** – completed bookings

---

## Booking Flow (Admin)

### 1. Pending
- Admin sees all new booking requests  
- Two buttons: **Allow** or **Discard**  
- If **Allow** → admin must enter:
  - Number of days  
  - Room number  
  - Extra bed (Yes/No)  
- After submitting → booking moves to **Check-in**

### 2. Check-in
- Shows all current staying guests  
- Admin can press **Checkout** for any booking  
- Once checkout is clicked → booking moves to **Check-out**

### 3. Check-out
- Shows completed/finished bookings

---

## Tools Used
- **WAMP Server** (Apache + MySQL)
- **Visual Studio Code (VS Code)**
- PHP, MySQL, HTML, CSS, JS

---

## Setup Steps

1. Install **WAMP**  
2. Install **VS Code**  
3. Place the project folder inside:  
   `C:\wamp64\www\Online_Hotel_Reservation`
4. Start WAMP → go to phpMyAdmin  
5. Create database `hotel_db`  
6. Import `db_hor.sql` (inside SQL folder)  
7. Run the project in browser:  
   `http://localhost/Online_Hotel_Reservation`
8. Admin Login (default):  
   - **Username:** admin  
   - **Password:** admin

---


Student Project – Online Hotel Reservation


