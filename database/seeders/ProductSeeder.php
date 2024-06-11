<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(60)->create();


        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 1;
        $product->title = "iphone 15 pro max";    
        $product->slug_unique = "apple-iphone-15promax";    
        $product->image = "apple-watch";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-15-Plus-(2)-(6)-5363.jpg";    
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "The iPhone 15 Pro Max display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.69 inches diagonally (actual viewable area is less).";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Dynamic Island
        Always-On display
        ProMotion technology with adaptive refresh rates up to 120Hz
        HDR display
        True Tone
        Wide color (P3)
        Haptic Touch
        2,000,000:1 contrast ratio (typical)
        1000 nits max brightness (typical); 1600 nits peak brightness (HDR); 2000 nits peak brightness (outdoor)
        Fingerprint-resistant oleophobic coating
        Support for display of multiple languages and characters simultaneously";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 0;
        $product->deals_of_the_day = 1;
        $product->save();
         

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 1;
        $product->title = "iphone 15 Plus";    
        $product->slug_unique = "apple-iphone-15-plus";    
        $product->image = "iphne 15 plus";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-15-Plus-(2)-7161.jpg";    
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "The Apple iPhone 15 Plus showcases an attractive and solid design, accompanied by a generously sized display featuring a dynamic island. Its A16 processor ensures seamless performance, while its excellent camera captures moments vividly.";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Brand-Apple,
        Model-iPhone 15 Plus,
        Network	-GSM / CDMA / HSPA / EVDO / LTE / 5G,
        Dimensions-160.9 x 77.8 x 7.8 mm,
        Weight-201 g,
        SIM-Nano-SIM and eSIM - International,
        Display Type-Super Retina XDR OLED | HDR10 | Dolby Vision | 2000 nits (peak),
        Display Size-6.7 inches,
        Display- Resolution	1290 x 2796 pixels,
        OS-	iOS 17, upgradable to iOS 17.4";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 1;
        $product->title = "iphone 14 pro max";    
        $product->slug_unique = "apple-iphone14";    
        $product->image = "apple-watch";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-14-Pro-Space-Black-1138.jpg";   
        // $product->image_url = "data:image/jpeg;base64,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";    
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "Recusandae dolore et nostrum et pariatur iusto dis...";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Mollitia reprehenderit accusamus ab aut quisquam saepe dicta recusandae enim dolores in est distinctio incidunt corporis a voluptas aut officia tempore nesciunt distinctio non sit similique quis dolores aut tempora reprehenderit reiciendis perspiciatis quia corporis quae iste.";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 0;
        $product->deals_of_the_day = 1;
        $product->save();



        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 2;
        $product->title = "Samsung s24 ultra";    
        $product->slug_unique = "samsung-s24ultra";    
        $product->image = "apple-watch";    
    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Galaxy-S23-Ultra-Sky-Blue-2618.jpg";
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "Recusandae dolore et nostrum et pariatur iusto dis...";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Mollitia reprehenderit accusamus ab aut quisquam saepe dicta recusandae enim dolores in est distinctio incidunt corporis a voluptas aut officia tempore nesciunt distinctio non sit similique quis dolores aut tempora reprehenderit reiciendis perspiciatis quia corporis quae iste.";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 2;
        $product->title = "Samsung s23 ultra";    
        $product->slug_unique = "samsung-s23-ultra";    
        $product->image = "samsung";    
    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Galaxy-S23-Ultra-Cream-1280.jpg";
        $product->sku = "samsung";    
        $product->sku = 30;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Samsung Galaxy S23 Ultra 5G, the latest flagship from the esteemed Galaxy S series, embodies a harmonious blend of sleek design and vibrant color options. Its meticulously proportioned form captivates the eye, promising a premium aesthetic experience. However, what truly sets this flagship apart is its groundbreaking 200MP main camera, featuring larger lenses that redefine the boundaries of smartphone photography. With this revolutionary camera system, every shot becomes a masterpiece, showcasing unparalleled clarity and detail. Moreover, the Galaxy S23 Ultra 5G boasts top-notch performance, powered by the latest technology for seamless multitasking and gaming. As Samsung's flagship offering, it stands proudly at the pinnacle of innovation, promising an exhilarating user experience that exceeds all expectations..";    
        $product->product_tag = "macbook";    
        $product->specification = "200MP main camera with advanced sensors and light-absorbing pixels for unparalleled photography and videography in any lighting condition
        Reengineered Nightography Camera with advanced sensors and noise-reducing technology, for exceptional night photography and videography,
        200MP Wide Angle camera with adaptive pixel technology for capturing detailed and clear images even in low light,
        Expert Raw feature including Ashtrophoto and Multi-Exposure modes for capturing detailed and clear raw photos in various conditions,
        Snapdragon 8 Gen 2 Processor for seamless performance, even with demanding tasks like gaming and using the 200MP camera ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 2;
        $product->title = "samsung Z Fold";    
        $product->slug_unique = "samsung-z-fold";    
        $product->image = "samsung";    
    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Galaxy-Z-Fold5-Icy-Blue-4723.jpg";
        $product->sku = "macbook";    
        $product->sku = 30;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Samsung Z Fold 5 is a groundbreaking innovation, boasting a larger and more robust screen, along with an upgraded hinge for enhanced durability. Despite its smaller size compared to previous versions, it packs a punch in terms of strength and performance. The exclusive S Pen feature adds convenience to multitasking, allowing users to seamlessly switch between tasks. Furthermore, the upgraded camera elevates the art of photography, capturing your imagination within each frame. With improved battery life, this phone offers an all-around exceptional experience.";    
        $product->product_tag = "macbook";    
        $product->specification = "A stunning, immersive 7.6,  expansive foldable screen to improve tasking
        Multitasking seems so much easier and more organized on the giant screen,
        The new slimmer S pen makes it more convenient to use for multiple tasking,
        Slimmer and lightweight  than its previous version, yet very sturdy and durable build,
        A bigger cover screen can be used as the secondary phone for you,
        4 nm 8 Gen 2 processor with the latest software to bolster the performance ";    
        $product->banner = 1;
        $product->featured = 0;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();




        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 2;
        $product->sub_category_id = 3;
        $product->title = "iPad Pro M1 2021 - 11inch";    
        $product->slug_unique = "ipad-pro-M1";    
        $product->image = "apple-watch";    
        // $product->image_url = "data:image/jpeg;base64,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";    
        $product->image_url ="https://adminapi.applegadgetsbd.com/storage/media/large/2469-64685.jpg";
        //$product->image_url = "data:image/jpeg;base64,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";
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "Recusandae dolore et nostrum et pariatur iusto dis...";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Mollitia reprehenderit accusamus ab aut quisquam saepe dicta recusandae enim dolores in est distinctio incidunt corporis a voluptas aut officia tempore nesciunt distinctio non sit similique quis dolores aut tempora reprehenderit reiciendis perspiciatis quia corporis quae iste.";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 3;
        $product->sub_category_id = 6;
        $product->title = "Macbook Air M1 13 inch";    
        $product->slug_unique = "macbook-air-13";    
        $product->image = "macbook";    
    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/MacBook-Air-M2-Space-Gray-5005.jpg";
        $product->sku = "macbook";    
        $product->sku = 30;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "introducing the Apple MacBook Air M2 2022, a revolutionary ultraportable laptop that combines incredible power and effortless portability. Powered by the avant grade, with enhanced GPU and CPU capabilities, this laptop delivers exceptional performance for demanding tasks. Its lightweight design makes it a breeze to carry wherever you go, while the improved camera ensures crystal-clear video calls and content creation. With optimized battery life and convenient MagSafe charging, the MacBook Air M2 2022 is the ultimate companion for on-the-go productivity and entertainment.";    
        $product->product_tag = "macbook";    
        $product->specification = "Thinner, lighter design with multiple alluring colors
        Much-improved retina display with true tune technology,
        Much-improved webcam than ever for expedient communication,
        18 hours of battery life for hassle-free mobile use for a long period,
        Great performance for most tasks by the balanced M2 processor,
        MagSafe charging is extremely convenient for the users. ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();


        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 4;
        $product->sub_category_id = 5;
        $product->title = "Apple watch series 9";    
        $product->slug_unique = "apple-watch";    
        $product->image = "apple-watch-s-9";    
        // $product->image_url = "data:image/jpeg;base64,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";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Apple-Watch-SE-2020-Gold-GPS-2595.jpg";
        $product->sku = "apple-watch";    
        $product->sku = 30;    
        $product->purchase_price = 400000;    
        $product->intial_stock = 50;    
        $product->stock = 50;    
        $product->description = "Recusandae dolore et nostrum et pariatur iusto dis...";    
        $product->product_tag = "Lurline Windler";    
        $product->specification = "Mollitia reprehenderit accusamus ab aut quisquam saepe dicta recusandae enim dolores in est distinctio incidunt corporis a voluptas aut officia tempore nesciunt distinctio non sit similique quis dolores aut tempora reprehenderit reiciendis perspiciatis quia corporis quae iste.";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();
        
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 7;
        $product->title = "Oppo Reno 8 5G";    
        $product->slug_unique = "oppo-reno-8";    
        $product->image = "oppo";    
    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Oppo-Reno8-Pro-5G-Glazed-Black-5636.jpg";
        $product->sku = "oppo";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The smartphone is integrated with a big screen of 6.43 inches AMOLED capacitive touchscreen. The smartphone supports Dual SIM and it runs on the Android 11 + ColorOS 11.1 operating system.
        It is fueled with a non-removable Li-Po 4310 mAh battery + Fast charging 30W. The device is powered by a MediaTek MT6779V Helio P95 Octa-core processor and PowerVR GM9446 GPU..";    
        $product->product_tag = "macbook";    
        $product->specification = "GSM / HSPA / LTE / 5G
        Dimensions	161.2 x 74.2 x 7.3 mm,
        Weight	183 g,
        SIM	Dual SIM (Nano-SIM, dual stand-by),
        Display Type	AMOLED, 1B colors, 120Hz, HDR10+, 500 nits (typ), 800 nits (HBM), 950 nits (peak),
        Display Size	6.7 inches, 108.0 cm2 (~90.3% screen-to-body ratio),
        Display Resolution	1080 x 2412 pixels, 20:9 ratio (~394 ppi density). ";    
        $product->banner = 0;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 7;
        $product->title = "Oppo Find X7 ultra";    
        $product->slug_unique = "oppo-find-x7-ultra";    
        $product->image = "oppo";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/OPPO-Find-X7-Ultra-Black-1457.jpg";
        $product->sku = "oppo";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Oppo Find X7 Ultra Play Price in Bangladesh is a topic of interest for tech enthusiasts looking for a high-end smartphone experience. The Oppo Find X7 Ultra, released in January 2024, is a marvel of modern technology, offering variants with 12 GB and 16 GB of RAM, and 256 GB or 512 GB of internal storage. Its powerful Qualcomm Snapdragon 8 Gen 3 chipset ensures smooth performance, whether you’re gaming or multitasking..";    
        $product->product_tag = "oppo";    
        $product->specification = "Model-OPPO Find X7 Ultra,
        Network	-GSM / CDMA / HSPA / CDMA2000 / LTE / 5G,
        Dimensions-	164.3 x 76.2 x 9.5 mm,
        Weight	-221 g,
        SIM	-Dual SIM (Nano-SIM, dual stand-by),
        Display Type-LTPO AMOLED, 1B colors, 120Hz, Dolby Vision, HDR10+ | 6.82 inches | 1440 x 3168 pixels,
        Display Size-6.82 inches, 113.0 cm2 (~90.3% screen-to-body ratio),
        Display Resolution-1440 x 3168 pixels (~510 ppi density). ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 0;
        $product->save();
        
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 7;
        $product->title = "Oppo Find N2 Flip";    
        $product->slug_unique = "oppo-find-n2-flip";    
        $product->image = "oppo";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Oppo-Find-N2-Flip-black-up--4563.jpg";
        $product->sku = "oppo";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Oppo N2 Flip boasts a sturdy design with the strongest hinge, ensuring durability and proper utilization of the crease. Its large cover screen offers multiple tasking abilities, enhancing productivity. The camera is a true marvel, featuring unbelievable capabilities with the renowned Hasselblad technology. The impressive battery life leaves users in awe. Overall, the phone exudes a next-gen feeling, providing a great vibe and an unparalleled smartphone experience.";    
        $product->product_tag = "oppo";    
        $product->specification = "Model-Oppo Find N2 Flip,
        Network	-GSM / CDMA / HSPA / LTE / 5G,
        Dimensions-	Unfolded: 166.2 x 75.2 x 7.5 mm, Folded: 85.5 x 75.2 x 16 mm,
        Weight-	191 g,
        SIM	-Dual SIM (Nano-SIM, dual stand-by),
        Display- Type-Foldable LTPO AMOLED, 120Hz, HDR10+, 1600 nits (Foldable) AMOLED, Corning Gorilla Glass 5 (Cover),
        Display Size-6.8 inches (Foldable) 3.26 inches (Cover) ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 0;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 8;
        $product->title = "OnePlus ACE 2";    
        $product->slug_unique = "oneplus-ace-2";    
        $product->image = "oneplus";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/OnePlus-ACE-2-Black-5074.jpg";
        $product->sku = "oneplus";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "Oneplus ACE 2, the ultimate gaming powerhouse. Equipped with the Consonant Touch and full-blood version of Snapdragon Processor, it delivers lightning-fast performance, allowing you to conquer any game with ease. ";    
        $product->product_tag = "oppo";    
        $product->specification = "introducing Consonant Touch
        Full Blood Version Of Snapdragon Processor
        16 GB Large RAM
        Super Large Liquid Cooling
        Awesome Gaming Activity
        Flagship Design
        Extraordinary Camera ";    
        $product->banner = 0;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();
        
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 1;
        $product->sub_category_id = 8;
        $product->title = "OnePlus 12";    
        $product->slug_unique = "oneplus-12";    
        $product->image = "oneplus";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/OnePlus-12-Flowy-Emerald-9569.jpg";
        $product->sku = "oneplus";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The OnePlus 12 stands as the latest flagship from smartphone giant 1+. The smartphone holds a lavish design inspired by luxurious watches. Aside from the style it has an array of excellent colors. Equipped with a Hasselblad camera, it elevates photography to a masterpiece level. The device incorporates a cutting-edge cooling system, ensuring optimal performance. With an unlimited battery, users enjoy extended usage without interruptions ";    
        $product->product_tag = "oneplus";    
        $product->specification = "Brand-OnePlus,
        Model-OnePlus 12,
        Network-GSM / CDMA / HSPA / CDMA2000 / LTE / 5G,
        Dimensions-164.3 x 75.8 x 9.2 mm,
        Weight-220 g,
        SIM-Single SIM,
        Display Type-LTPO AMOLED,
        Display Size-6.82 inches, 113.0 cm2";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 2;
        $product->sub_category_id = 4;
        $product->title = "xiaomi Tab 6";    
        $product->slug_unique = "xiaomi-tab-6";    
        $product->image = "xiaomi";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Redmi-Pad-Mint-Green-8732.jpg";
        $product->sku = "oppo";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Oppo Find X7 Ultra Play Price in Bangladesh is a topic of interest for tech enthusiasts looking for a high-end smartphone experience. The Oppo Find X7 Ultra, released in January 2024, is a marvel of modern technology, offering variants with 12 GB and 16 GB of RAM, and 256 GB or 512 GB of internal storage. Its powerful Qualcomm Snapdragon 8 Gen 3 chipset ensures smooth performance, whether you’re gaming or multitasking..";    
        $product->product_tag = "oppo";    
        $product->specification = "Model-OPPO Find X7 Ultra,
        Network	-GSM / CDMA / HSPA / CDMA2000 / LTE / 5G,
        Dimensions-	164.3 x 76.2 x 9.5 mm,
        Weight	-221 g,
        SIM	-Dual SIM (Nano-SIM, dual stand-by),
        Display Type-LTPO AMOLED, 1B colors, 120Hz, Dolby Vision, HDR10+ | 6.82 inches | 1440 x 3168 pixels,
        Display Size-6.82 inches, 113.0 cm2 (~90.3% screen-to-body ratio),
        Display Resolution-1440 x 3168 pixels (~510 ppi density). ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 0;
        $product->save();
    
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 4;
        $product->sub_category_id = 5;
        $product->title = "Apple watch Series 8";    
        $product->slug_unique = "apple-watch-8";    
        $product->image = "apple";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Graphite-GPS+Cellular-2602.jpg";
        $product->sku = "apple";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The Apple Watch Series 8 stands as an extraordinary smartwatch from the tech giant. Made with a basket full of upgraded features that take it beyond its predecessors. Its swift connectivity and dynamic design redefine smartwatch capability. The large dynamic display shows unbelievable visuals.";    
        $product->product_tag = "apple";    
        $product->specification = "Charging Interface-Apple Watch Magnetic Fast Charger,
        Body-Dimension: 41 x 35 x 10.7 mm (41mm) | 45 x 38 x 10.7 mm (45mm) Weight: 42.3 (41mm) | 51.5 g (45mm),
        Brand-Apple,
        Model-Watch Series 8,
        Calling Features-Yes,
        Battery capacity-Li-Ion 308 mAh | Lithium-Ion | Non-Removable,
        Material-Glass Front | Ceramic/Sapphire Crystal back | Stainless steel frame ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();
        
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 4;
        $product->sub_category_id = 5;
        $product->title = "Apple watch Ultra";    
        $product->slug_unique = "apple-watch-ultra";    
        $product->image = "apple";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/Apple-Watch-UltraTitanium-Case-with-Alpine-Loop-Orange-a-4706.jpg";
        $product->sku = "apple";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "The rugged 49mm titanium case strikes a balance between weight, durability, and corrosion resistance. With 100-meter water resistance  and IP6X dust resistance..";    
        $product->product_tag = "apple";    
        $product->specification = "Charging Interface-Apple Watch Magnetic Fast Charger,
        Body-Dimension: 41 x 35 x 10.7 mm (41mm) | 45 x 38 x 10.7 mm (45mm) Weight: 42.3 (41mm) | 51.5 g (45mm),
        Brand-Apple,
        Model-Watch Series 8,
        Calling Features-Yes,
        Battery capacity-Li-Ion 308 mAh | Lithium-Ion | Non-Removable,
        Material-Glass Front | Ceramic/Sapphire Crystal back | Stainless steel frame ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();
        
        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 5;
        $product->sub_category_id = 9;
        $product->title = "Oneplus Buds 3";    
        $product->slug_unique = "oneplus-buds-3";    
        $product->image = "oneplus";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/OnePlus-Buds-3-Splendid-Blue-6806.jpg";
        $product->sku = "oneplus";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "Dive into auditory excellence with OnePlus Buds 3, an epitome of innovation. Elevate your music experience with BassWave™ enhancement, delivering unparalleled depth and resonance. Immerse in the richness of Hi-Res Audio through LHDC 5.0, a sonic masterpiece ensuring every note is pure perfection.";    
        $product->product_tag = "oneplus";    
        $product->specification = "Brand-OnePlus,
        Charging Interface-USB Type-C,
        Ip Rating-IP55 Water & dust resistant,
        Model-OnePlus Buds 3,
        ANC Status-Yes | Up to 49dB,
        Latency-94ms Low latency,
        Connectivity-Bluetooth, 5.3, 10m range, HFP,A2DP,AVRCP | Google Fast Pair ";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 1;
        $product->deals_of_the_day = 1;
        $product->save();

        $product = new Product();
        $product->user_id = 1;
        $product->category_id = 5;
        $product->sub_category_id = 9;
        $product->title = "realme Buds T110 TWS Earbuds";    
        $product->slug_unique = "realme-Buds-T110-TWS-Earbuds";    
        $product->image = "oneplus";    
        $product->image_url = "https://adminapi.applegadgetsbd.com/storage/media/large/realme-Buds-T110-TWS-Earbuds-Black-5431.jpg";
        $product->sku = "oneplus";    
        $product->sku = 9005;    
        $product->purchase_price = 1200000;    
        $product->intial_stock = 90;    
        $product->stock = 50;    
        $product->description = "Dive into amazing music listening and remain stylish with the Realme Buds T100 TWS Earbuds. From its sleek and cool earbuds designed for immersive audio experiences: available in glossy Black, White, and Green. Comes with extra eartips for ergonomic fit and has IPX5 water resistance to save you from sudden splashes..";    
        $product->product_tag = "oneplus";    
        $product->specification = "Brand-Realme,
        Bluetooth-Version 5.4 | Transmission Distance: <10 | Audio-Visual Synchronization,
        Charging Interface-TYPE-C,
        Ip Rating-Yes | IPX5 Water Resistant (Sweat, Spills, Splashes)
        Model-Buds T110 TWS Earbuds";    
        $product->banner = 1;
        $product->featured = 1;
        $product->trending = 0;
        $product->deals_of_the_day = 1;
        $product->save();







        // user_id
        // category_id
        // sub_category_id
        // title
        // slug_unique
        // image
        // image_url
        // sku
        // stock
        // purchase_price
        // intial_stock
        // left_stock
        // description
        // product_tag
        // specification
        // banner
        // featured
        // trending
        // deals_of_the_day
    }
}
