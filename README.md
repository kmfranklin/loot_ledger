# Loot Ledger

Loot Ledger is a **Magic Item Customizer & Loot Table Builder** for Dungeon Masters running _Dungeons & Dragons 5e._

This tool allows users to:

-   Browse **all equipment, armor, weapons, and magic items** from the SRD.
-   Create **custom items**, either from scratch or using SRD content.
-   Manage **personalized loot tables** for D&D campaigns.
-   Export loot tables in **JSON, Markdown, or PDF** formats.

This project is built using **Laravel**, with user authentication powered by **Laravel Breeze**.

## **Installation Instructions**

Follow these steps to set up **Loot Ledger** on your local development environment.

### **1. Clone the Repository**

First, clone the **Loot Ledger** repository and navigate into the project directory.

```sh
git clone https://github.com/kmfranklin/loot_ledger.git
cd loot_ledger
```

### **2. Install Dependencies**

```sh
composer install
npm install
```

### **3. Set Up Environment Variables**

Copy the example environment file and generate the application key.

```sh
cp .env.example .env
php artisan key:generate
```

### **4. Set Up Database**

This project uses **SQLite** by default. Ensure you have an SQLite database file created.

```sh
touch database/database.sqlite
php artisan migrate
```

### **5. Start Development Server**

Run the Laravel development server.

```sh
php artisan serve
```

The application will now be available at http://127.0.0.1:8000.

## **Current Features**

-   User Authentication (Laravel Breeze)
-   Full SRD Equipment Database

## **Planned Features**

-   Item search and filtering
-   Custom item creation (from scratch, or using SRD items)
-   Loot table management
-   Export options (JSON, Markdown, PDF)
-   Randomized loot generation
-   Saving and sharing loot tables online

## **Data Source**

Loot Ledger uses **System Reference Document (SRD) 5.1** data sourced from:
[5e-bits SRD Database](https://5e-bits.github.io/docs/)  
This includes **equipment, weapons, armor, magic items, spells, and more**.

The data is provided under the [Open Gaming License (OGL) 1.0a](https://media.wizards.com/2016/downloads/DND/SRD-OGL_V1.1.pdf).
