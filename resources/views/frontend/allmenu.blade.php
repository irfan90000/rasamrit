@extends('frontend.layout.app')
@section('content')
@section('title', config('app.name') . ' | ' . $page_title)
<div class="breadchrumb">
    <div class="container-fluid">
        <h4 class="title">All Menu</h4>
        <p class="sub-title">Transform Into the Best Version of Yourself!</p>
    </div>
</div>
<section class="section-padding1 bg-white">
    <div class="container">
        <div class="food_menu_area all_menu">
            <div class="tab-class text-center wow fadeInUp">
                <ul class="nav nav-pills food_menu ">
                    <li class="nav-item">
                        <a class="active" data-bs-toggle="pill" href="#menunonveg">
                            <h6 class="menutype">
                                Indian Non Veg
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#menuveg">
                            <h6 class="menutype">
                                Indian Veg
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#saladveg">
                            <h6 class="menutype">
                                Salad Veg
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#saladnonveg">
                            <h6 class="menutype">
                                Salad Non Veg
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#vegan">
                            <h6 class="menutype">
                                Vegan
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#juices">
                            <h6 class="menutype">
                                Juices
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#breakfastveg">
                            <h6 class="menutype">
                                Breakfast Veg
                            </h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="pill" href="#breakfastnonveg">
                            <h6 class="menutype">
                                Breakfast Nonveg
                            </h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="menunonveg" class="tab-pane fade show p-0 active">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients</th>
                                                <th>Calories</th>
                                                <th>Fat</th>
                                                <th>Protein</th>
                                                <th>Carbs</th>
                                                <th>Price (INR)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Butter Chicken with 2 Chapati</td>
                                                <td>Wheat bran chapati, Chicken breast</td>
                                                <td>400-450 kcal</td>
                                                <td>25-30g</td>
                                                <td>40-45g</td>
                                                <td>10-15g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Makhni Bowl with Rice</td>
                                                <td>An All Time Classic - Tender Boneless Chicken Tossed In A Silky
                                                    Makhani
                                                    Gravy. Served With Choice Of Rice</td>
                                                <td>450-520 kcal</td>
                                                <td>16-21g</td>
                                                <td>29-35g</td>
                                                <td>55-62g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Makhni Bowl with 3 Roti</td>
                                                <td>An All Time Classic - Tender Boneless Chicken Tossed In A Silky
                                                    Makhani
                                                    Gravy. Served With Choice Of Roti</td>
                                                <td>610-720 kcal</td>
                                                <td>25-29g</td>
                                                <td>34-39g</td>
                                                <td>70-87g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Tuscan Chicken Pasta</td>
                                                <td>Pan Seared Juicy Chicken Served Atop Whole Wheat Pasta Tossed In
                                                    Marinara Sauce, Topped With Parmesan And Olives</td>
                                                <td>550-600 kcal</td>
                                                <td>10g</td>
                                                <td>40g</td>
                                                <td>40g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Herb Roasted Chicken Served With Tossed Vegetables</td>
                                                <td>Juicy Chicken Roasted With Fragrant Herbs, Served Alongside
                                                    Flavorful
                                                    Tossed Vegetables</td>
                                                <td>400-500 kcal</td>
                                                <td>20-25g</td>
                                                <td>42-49g</td>
                                                <td>15-20g</td>
                                                <td>389</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken In Chasseur Mushroom Sauce Pasta</td>
                                                <td>Indulge In Tender Chicken Smothered In Chasseur Mushroom Sauce Atop
                                                    Al
                                                    Dente Pasta</td>
                                                <td>550-600 kcal</td>
                                                <td>10g</td>
                                                <td>40g</td>
                                                <td>40g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Tikka Masala Bowl Rice</td>
                                                <td>A Delicious And Flavorful Dish Made By Marinating Boneless Chicken
                                                    In
                                                    Tikka Masala Gravy. Served With Rice</td>
                                                <td>550-650 kcal</td>
                                                <td>22-26g</td>
                                                <td>24-30g</td>
                                                <td>42-50g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Tikka Masala Bowl Roti</td>
                                                <td>A Delicious And Flavorful Dish Made By Marinating Boneless Chicken
                                                    In
                                                    Tikka Masala Gravy. Served With Roti</td>
                                                <td>630-800 kcal</td>
                                                <td>39-44g</td>
                                                <td>28-37g</td>
                                                <td>57-76g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Lababdaar Bowl with Rice</td>
                                                <td>Boneless Chicken Cooked In A Flavorful Tomato Gravy, Tempered With
                                                    Aromatic Spices. Served With Rice</td>
                                                <td>550-640 kcal</td>
                                                <td>31-37g</td>
                                                <td>29-36g</td>
                                                <td>42-53g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Lababdaar Bowl with Roti</td>
                                                <td>Boneless Chicken Cooked In A Flavorful Tomato Gravy, Tempered With
                                                    Aromatic Spices. Served With Roti</td>
                                                <td>630-790 kcal</td>
                                                <td>34-43g</td>
                                                <td>33-42g</td>
                                                <td>57-78g</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Burrito Bowl With Cilantro Lime Rice</td>
                                                <td>Succulent Chicken, Cilantro Lime Rice, Beans, Salsa, And Creamy
                                                    Avocado
                                                </td>
                                                <td>560-650 kcal</td>
                                                <td>14-21g</td>
                                                <td>50-55g</td>
                                                <td>56-70g</td>
                                                <td>399</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menuveg" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Dish Name</th>
                                                <th>Description</th>
                                                <th>Calories (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Price (INR)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paneer Lababdaar Bowl Rice</td>
                                                <td>Paneer / Cooked In A Flavorful Tomato Gravy, Tempered With Aromatic
                                                    Spices. Served With Choice Of Rice</td>
                                                <td>550-650</td>
                                                <td>22-26</td>
                                                <td>24-30</td>
                                                <td>42-50</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Lababdaar Bowl Roti</td>
                                                <td>Paneer / Cooked In A Flavorful Tomato Gravy, Tempered With Aromatic
                                                    Spices. Served With Choice Of Roti</td>
                                                <td>630-800</td>
                                                <td>39-44</td>
                                                <td>28-37</td>
                                                <td>57-76</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Tikka Masala Bowl with Rice</td>
                                                <td>A Delicious And Flavorful Dish Made By Marinating Paneer And
                                                    Simmering
                                                    It In A Tikka Masala Gravy. Served With Choice Of Rice</td>
                                                <td>550-650</td>
                                                <td>22-26</td>
                                                <td>24-30</td>
                                                <td>42-50</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Tikka Masala Bowl with Roti</td>
                                                <td>A Delicious And Flavorful Dish Made By Marinating Paneer And
                                                    Simmering
                                                    It In A Tikka Masala Gravy. Served With Choice Of Roti</td>
                                                <td>630-800</td>
                                                <td>39-44</td>
                                                <td>28-37</td>
                                                <td>57-76</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Veggie Stir-fry With Tofu And Jasmine Rice</td>
                                                <td>Savor The Flavors Of Our Veggie Stir-Fry Featuring Steamed Tofu And
                                                    Fragrant Jasmine Rice, A Delicious Vegetarian Option.</td>
                                                <td>500-550</td>
                                                <td>24-27</td>
                                                <td>28-32</td>
                                                <td>44-53</td>
                                                <td>429</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Makhni Bowl with Rice</td>
                                                <td>An All Time Classic - Soft Paneer Tossed In A Silky Makhani Gravy.
                                                    Served With Choice Of Rice</td>
                                                <td>560-650</td>
                                                <td>33-40</td>
                                                <td>24-31</td>
                                                <td>44-55</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Makhni Bowl Roti</td>
                                                <td>An All Time Classic - Soft Paneer Tossed In A Silky Makhani Gravy.
                                                    Served With Choice Of Roti</td>
                                                <td>640-800</td>
                                                <td>37-46</td>
                                                <td>28-37</td>
                                                <td>59-80</td>
                                                <td>369</td>
                                            </tr>
                                            <tr>
                                                <td>Tofu Burrito Bowl With Spicy Salsa</td>
                                                <td>Crispy Tofu, Fiery Salsa, Beans, Fresh Veggies, And Cilantro Lime
                                                    Rice
                                                    Create A Spicy, Satisfying Vegetarian Bowl.</td>
                                                <td>530-600</td>
                                                <td>14-20</td>
                                                <td>28-32</td>
                                                <td>60-75</td>
                                                <td>399</td>
                                            </tr>
                                            <tr>
                                                <td>Vegetarian Burrito Bowl With Black Beans And Corn</td>
                                                <td>Wholesome Beans, Sweet Corn, Fresh Veggies, And Flavorful Salsa Atop
                                                    Cilantro Lime Rice Create A Satisfying Vegetarian Bowl.</td>
                                                <td>530-600</td>
                                                <td>15-20</td>
                                                <td>30-35</td>
                                                <td>60-75</td>
                                                <td>377</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="saladveg" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients</th>
                                                <th>Calories</th>
                                                <th>Fat</th>
                                                <th>Protein</th>
                                                <th>Carbs</th>
                                                <th>Price (INR)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paneer Tikka Whole Bowl</td>
                                                <td>Paneer Tikka 200 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [High Protein, Antioxidant, Grilled]</td>
                                                <td>735-755 kcal</td>
                                                <td>49g</td>
                                                <td>39g</td>
                                                <td>46-49g</td>
                                                <td>299</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Peri Peri Power Bowl</td>
                                                <td>Peri Peri Paneer 200 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Grilled, Fiber Rich]</td>
                                                <td>735-755 kcal</td>
                                                <td>49g</td>
                                                <td>39g</td>
                                                <td>46-49g</td>
                                                <td>299</td>
                                            </tr>
                                            <tr>
                                                <td>Veggie Delight Happy Salad</td>
                                                <td>Lettuce, Kale & Red Cabbage, Barley, Bell Peppers, Cucumber,
                                                    Jalapeno,
                                                    Olive, Garlic Yogurt dressing topped with Super Seed mix. [Low
                                                    Calorie,
                                                    Gut-friendly, Fiber Rich]</td>
                                                <td>232-252 kcal</td>
                                                <td>9g</td>
                                                <td>12g</td>
                                                <td>35-37g</td>
                                                <td>219</td>
                                            </tr>
                                            <tr>
                                                <td>Mushroom Very Merry Salad</td>
                                                <td>Roast Mushrooms 80 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [Low Calorie, Gut-friendly, Fiber Rich]</td>
                                                <td>230-250 kcal</td>
                                                <td>9g</td>
                                                <td>13g</td>
                                                <td>35-37g</td>
                                                <td>229</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Keto Salad</td>
                                                <td>Peri Peri Paneer 100 gms, Lettuce, Kale & Red Cabbage, Bell Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Calorie, High Protein, Low Carb]</td>
                                                <td>470-490 kcal</td>
                                                <td>29g</td>
                                                <td>28g</td>
                                                <td>27-30g</td>
                                                <td>249</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Tikka Keto Bowl</td>
                                                <td>Paneer Tikka 200 gms, Lettuce, Kale & Red Cabbage, Bell Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [High Protein, Gluten Free, Grilled]</td>
                                                <td>590-610 kcal</td>
                                                <td>42g</td>
                                                <td>38g</td>
                                                <td>25-28g</td>
                                                <td>299</td>
                                            </tr>
                                            <tr>
                                                <td>Veggie Chipotle Hearty Salad</td>
                                                <td>Lettuce, Kale & Red Cabbage, Barley, Bell Peppers, Cucumber,
                                                    Jalapeno,
                                                    Olive, Chipotle dressing topped with Super Seed mix. [Fiber Rich,
                                                    Gut-friendly, Antioxidant]</td>
                                                <td>312-332 kcal</td>
                                                <td>10-11g</td>
                                                <td>12-13g</td>
                                                <td>48-50g</td>
                                                <td>219</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Peri Peri Bravo Salad</td>
                                                <td>Peri Peri Paneer 100 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Gut-friendly, Antioxidant]</td>
                                                <td>470-490 kcal</td>
                                                <td>30g</td>
                                                <td>33g</td>
                                                <td>53-55g</td>
                                                <td>249</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Chipotle FeelGood Salad</td>
                                                <td>Peri Peri Paneer 100 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Chipotle dressing topped with
                                                    Super
                                                    Seed mix. [High Protein, Grilled, Antioxidant]</td>
                                                <td>470-490 kcal</td>
                                                <td>30g</td>
                                                <td>33g</td>
                                                <td>53-55g</td>
                                                <td>259</td>
                                            </tr>
                                            <tr>
                                                <td>Mushroom Keto Salad</td>
                                                <td>Roast Mushrooms 80 gms, Lettuce, Kale & Red Cabbage, Bell Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Calorie, Gluten Free, Fiber Rich]</td>
                                                <td>225-245 kcal</td>
                                                <td>9-10g</td>
                                                <td>13g</td>
                                                <td>28-30g</td>
                                                <td>229</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="saladnonveg" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients</th>
                                                <th>Calories</th>
                                                <th>Fat</th>
                                                <th>Protein</th>
                                                <th>Carbs</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Chicken Tikka Super Bowl</td>
                                                <td>Chicken Tikka 200 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Antioxidant, Grilled]</td>
                                                <td>585-605 kcal</td>
                                                <td>32g</td>
                                                <td>49g</td>
                                                <td>38-40g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>Herb Chicken Mighty Bowl</td>
                                                <td>Herb Grilled Chicken 200 gms, Lettuce, Kale & Red Cabbage, Barley,
                                                    Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Grilled, Antioxidant]</td>
                                                <td>625-645 kcal</td>
                                                <td>32g</td>
                                                <td>51g</td>
                                                <td>38-40g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>BBQ Chicken Beast Bowl</td>
                                                <td>BBQ Chicken 200 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [High Protein, Grilled, Fiber Rich]</td>
                                                <td>635-655 kcal</td>
                                                <td>32g</td>
                                                <td>50g</td>
                                                <td>44-47g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Chipotle Sassy Salad</td>
                                                <td>Roast Chicken 100 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Chipotle dressing topped with
                                                    Super
                                                    Seed mix. [High Protein, Gut-friendly, Fiber Rich]</td>
                                                <td>400-420 kcal</td>
                                                <td>18-20g</td>
                                                <td>40g</td>
                                                <td>39-42g</td>
                                                <td>₹269</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Keto Salad</td>
                                                <td>Roast Chicken 100 gms, Lettuce, Kale & Red Cabbage, Bell Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Calorie, High Protein, Low Carb]</td>
                                                <td>375-395 kcal</td>
                                                <td>18-20g</td>
                                                <td>40g</td>
                                                <td>24-26g</td>
                                                <td>₹269</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Tikka Keto Bowl</td>
                                                <td>Chicken Tikka 200 gms, Lettuce, Kale & Red Cabbage, Bell Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Carb, High Protein, Gluten Free]</td>
                                                <td>520-540 kcal</td>
                                                <td>28g</td>
                                                <td>50g</td>
                                                <td>25-28g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Peri Peri Boss Bowl</td>
                                                <td>Peri Peri Chicken 200 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Grilled, Fiber Rich]</td>
                                                <td>640-660 kcal</td>
                                                <td>31g</td>
                                                <td>53g</td>
                                                <td>60-63g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Peppy Salad</td>
                                                <td>Roast Chicken 100 gms, Lettuce, Kale & Red Cabbage, Barley, Bell
                                                    Peppers, Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped
                                                    with
                                                    Super Seed mix. [High Protein, Grilled, Antioxidant]</td>
                                                <td>478-498 kcal</td>
                                                <td>15g</td>
                                                <td>43g</td>
                                                <td>54-56g</td>
                                                <td>₹269</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Peri Peri Keto Bowl</td>
                                                <td>Peri Peri Chicken 200 gms, Lettuce, Kale & Red Cabbage, Bell
                                                    Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Carb, High Protein, Antioxidant]</td>
                                                <td>475-495 kcal</td>
                                                <td>28-30g</td>
                                                <td>40-42g</td>
                                                <td>25-30g</td>
                                                <td>₹299</td>
                                            </tr>
                                            <tr>
                                                <td>Herb Chicken Keto Bowl</td>
                                                <td>Herb Grilled Chicken 200 gms, Lettuce, Kale & Red Cabbage, Bell
                                                    Peppers,
                                                    Cucumber, Jalapeno, Olive, Garlic Yogurt dressing topped with Super
                                                    Seed
                                                    mix. [Low Carb, High Protein, Gluten Free]</td>
                                                <td>470-490 kcal</td>
                                                <td>28-30g</td>
                                                <td>39-41g</td>
                                                <td>25-28g</td>
                                                <td>₹299</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vegan" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Meal Name</th>
                                                <th>Ingredients</th>
                                                <th>Benefits</th>
                                                <th>Calories</th>
                                                <th>Fat</th>
                                                <th>Protein</th>
                                                <th>Carbs</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Chole (Chickpea Curry)</td>
                                                <td>Chickpeas, tomatoes, onions, garlic, ginger, cumin, coriander,
                                                    turmeric,
                                                    green chilies.</td>
                                                <td>High in protein and fiber, helps improve digestion, boosts heart
                                                    health,
                                                    regulates blood sugar, and is a good source of iron.</td>
                                                <td>250</td>
                                                <td>8g</td>
                                                <td>12g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Aloo Gobi (Potato & Cauliflower Curry)</td>
                                                <td>Potatoes, cauliflower, tomatoes, peas, cumin, turmeric, coriander,
                                                    garam
                                                    masala.</td>
                                                <td>Rich in antioxidants, supports the immune system, reduces
                                                    inflammation,
                                                    promotes digestive health, and is a great source of vitamin C and
                                                    fiber.
                                                </td>
                                                <td>200</td>
                                                <td>7g</td>
                                                <td>4g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Baingan Bharta (Smoked Eggplant Curry)</td>
                                                <td>Eggplant, onions, tomatoes, garlic, coriander, cumin, turmeric,
                                                    lemon
                                                    juice.</td>
                                                <td>High in fiber and antioxidants, aids in digestion, promotes heart
                                                    health, and improves skin health.</td>
                                                <td>150</td>
                                                <td>6g</td>
                                                <td>3g</td>
                                                <td>20g</td>
                                            </tr>
                                            <tr>
                                                <td>Palak Tofu (Spinach & Tofu Curry)</td>
                                                <td>Spinach, tofu, onions, tomatoes, garlic, cumin, coriander, turmeric,
                                                    ginger.</td>
                                                <td>High in iron, calcium, and vitamin C; supports healthy bones, aids
                                                    muscle growth, improves skin health, and provides plant-based
                                                    protein.
                                                </td>
                                                <td>180</td>
                                                <td>9g</td>
                                                <td>15g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Masoor Dal (Red Lentil Curry)</td>
                                                <td>Red lentils, tomatoes, onions, garlic, turmeric, cumin, mustard
                                                    seeds.
                                                </td>
                                                <td>Rich in plant-based protein, iron, and fiber. Promotes heart health,
                                                    regulates blood sugar, supports digestion, and provides essential
                                                    folate.</td>
                                                <td>220</td>
                                                <td>4g</td>
                                                <td>15g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Kale Chane (Black Chickpea Curry)</td>
                                                <td>Black chickpeas, tomatoes, onions, garlic, ginger, cumin, coriander,
                                                    turmeric.</td>
                                                <td>High in protein, fiber, and antioxidants. Helps regulate blood
                                                    sugar,
                                                    supports digestive health, improves heart health, and is rich in
                                                    iron
                                                    and magnesium.</td>
                                                <td>240</td>
                                                <td>6g</td>
                                                <td>12g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Korma (Vegetable Korma)</td>
                                                <td>Mixed vegetables (carrot, beans, peas), coconut milk, cashew paste,
                                                    cinnamon, cloves, ginger.</td>
                                                <td>Contains healthy fats from coconut milk and cashews, rich in
                                                    antioxidants from spices, provides vitamins and minerals; boosts
                                                    energy
                                                    and supports skin health.</td>
                                                <td>280</td>
                                                <td>18g</td>
                                                <td>6g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Dosa with Sambar</td>
                                                <td>Rice, urad dal, tamarind, vegetables (for sambar), mustard seeds,
                                                    curry
                                                    leaves, cumin.</td>
                                                <td>Rich in fiber, probiotics from fermented rice and dal, antioxidants,
                                                    helps with digestion, boosts immunity, and supports gut health.</td>
                                                <td>300</td>
                                                <td>10g</td>
                                                <td>7g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Tikka Masala</td>
                                                <td>Tofu, tomatoes, coconut milk, garlic, ginger, cumin, coriander,
                                                    turmeric, garam masala.</td>
                                                <td>High in plant-based protein from tofu, anti-inflammatory spices, and
                                                    healthy fats from coconut milk. Helps muscle growth and reduces
                                                    inflammation.</td>
                                                <td>320</td>
                                                <td>15g</td>
                                                <td>18g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Methi Thepla (Fenugreek Flatbread)</td>
                                                <td>Fenugreek leaves, whole wheat flour, turmeric, cumin, ginger, sesame
                                                    seeds.</td>
                                                <td>Fenugreek helps regulate blood sugar, promotes digestion, improves
                                                    lactation, high in fiber and iron, and boosts heart health.</td>
                                                <td>180</td>
                                                <td>6g</td>
                                                <td>5g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Pulao (Vegetable Pulao)</td>
                                                <td>Basmati rice, mixed vegetables (carrot, peas, beans), cumin,
                                                    turmeric,
                                                    bay leaves, cinnamon.</td>
                                                <td>Rich in fiber, antioxidants, and vitamins. A complete meal that
                                                    supports
                                                    digestion and boosts energy levels.</td>
                                                <td>260</td>
                                                <td>8g</td>
                                                <td>6g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Mung Bean Sprouts Salad</td>
                                                <td>Mung beans, cucumbers, tomatoes, onions, lemon juice, cilantro,
                                                    black
                                                    salt.</td>
                                                <td>High in protein, fiber, and antioxidants; supports digestion,
                                                    promotes
                                                    weight loss, and detoxifies the body.</td>
                                                <td>120</td>
                                                <td>2g</td>
                                                <td>7g</td>
                                                <td>22g</td>
                                            </tr>
                                            <tr>
                                                <td>Chana Chaat (Chickpea Salad)</td>
                                                <td>Chickpeas, onions, tomatoes, cucumbers, cilantro, lemon juice, chaat
                                                    masala, pomegranate.</td>
                                                <td>Packed with fiber, protein, antioxidants, and vitamin C. Helps with
                                                    weight management, improves digestion, and boosts immunity.</td>
                                                <td>180</td>
                                                <td>4g</td>
                                                <td>10g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Tandoori Broccoli</td>
                                                <td>Broccoli, soy yogurt, garlic, ginger, cumin, turmeric, coriander,
                                                    paprika, lemon juice.</td>
                                                <td>Rich in antioxidants, vitamin C, and fiber; supports immune health,
                                                    promotes digestion, and provides anti-inflammatory benefits.</td>
                                                <td>120</td>
                                                <td>5g</td>
                                                <td>4g</td>
                                                <td>18g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Biryani</td>
                                                <td>Basmati rice, mixed vegetables, onions, garlic, ginger, cumin,
                                                    turmeric,
                                                    garam masala, cilantro, saffron.</td>
                                                <td>Rich in fiber and antioxidants, helps improve digestion, boosts
                                                    immunity, provides essential vitamins and minerals, and supports
                                                    healthy
                                                    skin.</td>
                                                <td>350</td>
                                                <td>12g</td>
                                                <td>7g</td>
                                                <td>55g</td>
                                            </tr>
                                            <tr>
                                                <td>Aloo Methi (Potato Fenugreek)</td>
                                                <td>Potatoes, fenugreek leaves, cumin, mustard seeds, turmeric, garlic.
                                                </td>
                                                <td>Rich in iron, fiber, antioxidants, helps with blood sugar
                                                    regulation,
                                                    boosts digestion, and supports heart health.</td>
                                                <td>220</td>
                                                <td>7g</td>
                                                <td>4g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Paratha (Whole Wheat Flatbread)</td>
                                                <td>Whole wheat flour, water, salt, cumin, ghee (vegan butter).</td>
                                                <td>High in fiber, energy-boosting complex carbohydrates, and iron.
                                                    Promotes
                                                    digestive health and keeps you full longer.</td>
                                                <td>180</td>
                                                <td>8g</td>
                                                <td>5g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Methi Malai Methi</td>
                                                <td>Fenugreek leaves, coconut milk, cumin, turmeric, garlic, ginger.
                                                </td>
                                                <td>Supports heart health, promotes digestion, regulates blood sugar,
                                                    and is
                                                    rich in iron and calcium.</td>
                                                <td>210</td>
                                                <td>14g</td>
                                                <td>5g</td>
                                                <td>18g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Moong Dal (Green Lentil Curry)</td>
                                                <td>Moong dal (yellow split lentils), tomatoes, onions, garlic, cumin,
                                                    coriander, turmeric.</td>
                                                <td>High in protein, fiber, and iron. Supports heart health, regulates
                                                    blood
                                                    sugar levels, and aids in digestion.</td>
                                                <td>220</td>
                                                <td>5g</td>
                                                <td>12g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Tamarind Rice</td>
                                                <td>Rice, tamarind, mustard seeds, curry leaves, peanuts, dried red
                                                    chilies,
                                                    turmeric, salt.</td>
                                                <td>Rich in antioxidants, vitamin C, and fiber; helps digestion, boosts
                                                    immunity, and detoxifies the body.</td>
                                                <td>270</td>
                                                <td>12g</td>
                                                <td>6g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Sabzi (Mixed Vegetable Curry)</td>
                                                <td>Mixed vegetables (carrots, peas, beans, cauliflower), tomatoes,
                                                    onions,
                                                    garlic, cumin, coriander, turmeric.</td>
                                                <td>Rich in vitamins, fiber, and antioxidants. Helps with weight loss,
                                                    boosts immunity, and supports digestive health.</td>
                                                <td>210</td>
                                                <td>7g</td>
                                                <td>6g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Khichdi</td>
                                                <td>Rice, moong dal (yellow split lentils), cumin, turmeric, ginger,
                                                    mustard
                                                    seeds, curry leaves.</td>
                                                <td>High in fiber, protein, and antioxidants. Promotes gut health,
                                                    strengthens immunity, and provides a quick energy boost.</td>
                                                <td>250</td>
                                                <td>8g</td>
                                                <td>12g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Malai Kofta</td>
                                                <td>Tofu, potatoes, onion, garlic, ginger, cumin, coriander, coconut
                                                    milk,
                                                    tomatoes.</td>
                                                <td>High in protein, vitamins, and minerals. Helps in muscle building,
                                                    improves skin health, and is rich in anti-inflammatory properties.
                                                </td>
                                                <td>320</td>
                                                <td>18g</td>
                                                <td>10g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Dhokla</td>
                                                <td>Chickpea flour (besan), ginger, green chilies, mustard seeds, curry
                                                    leaves, lemon juice.</td>
                                                <td>Rich in protein, fiber, and antioxidants. Supports digestion, boosts
                                                    metabolism, and is a light, healthy snack.</td>
                                                <td>150</td>
                                                <td>6g</td>
                                                <td>7g</td>
                                                <td>20g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Pesarattu (Green Moong Pancake)</td>
                                                <td>Green moong dal, onions, cumin, ginger, green chilies, turmeric.
                                                </td>
                                                <td>High in protein, fiber, and antioxidants. Helps regulate blood
                                                    sugar,
                                                    supports heart health, and aids digestion.</td>
                                                <td>180</td>
                                                <td>5g</td>
                                                <td>12g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Aloo Baingan (Potato & Eggplant)</td>
                                                <td>Potatoes, eggplant, tomatoes, onions, garlic, cumin, coriander,
                                                    turmeric, garam masala.</td>
                                                <td>Rich in fiber, antioxidants, and potassium. Supports digestion,
                                                    regulates blood sugar, and helps maintain a healthy weight.</td>
                                                <td>220</td>
                                                <td>7g</td>
                                                <td>5g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Tofu Scramble</td>
                                                <td>Tofu, turmeric, cumin, garlic, onions, spinach, tomatoes.</td>
                                                <td>High in plant-based protein, iron, and calcium. Supports muscle
                                                    growth,
                                                    promotes bone health, and aids digestion.</td>
                                                <td>200</td>
                                                <td>12g</td>
                                                <td>18g</td>
                                                <td>10g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Methi Paratha (Fenugreek Flatbread)</td>
                                                <td>Whole wheat flour, fenugreek leaves, cumin, turmeric, salt.</td>
                                                <td>Helps regulate blood sugar, improves digestion, boosts lactation,
                                                    and is
                                                    high in fiber and iron.</td>
                                                <td>180</td>
                                                <td>7g</td>
                                                <td>6g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Stuffed Paratha</td>
                                                <td>Whole wheat flour, potatoes, spinach, onion, garlic, cumin,
                                                    coriander,
                                                    garam masala.</td>
                                                <td>High in fiber, vitamins, and minerals. Supports digestive health,
                                                    boosts
                                                    immunity, and helps control blood sugar.</td>
                                                <td>230</td>
                                                <td>9g</td>
                                                <td>6g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Lauki (Bottle Gourd) Curry</td>
                                                <td>Bottle gourd, tomatoes, onions, garlic, cumin, coriander, turmeric.
                                                </td>
                                                <td>Low in calories, high in water content. Aids digestion, improves
                                                    skin
                                                    health, and supports weight loss.</td>
                                                <td>150</td>
                                                <td>5g</td>
                                                <td>4g</td>
                                                <td>20g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Vegetable Pulao</td>
                                                <td>Basmati rice, mixed vegetables (carrot, peas, beans), cumin,
                                                    turmeric,
                                                    cinnamon, cloves, cardamom.</td>
                                                <td>Rich in fiber, antioxidants, and vitamins. Provides energy and
                                                    supports
                                                    healthy digestion.</td>
                                                <td>270</td>
                                                <td>8g</td>
                                                <td>6g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Tofu Bhurji</td>
                                                <td>Tofu, onions, tomatoes, cumin, turmeric, coriander, green chilies.
                                                </td>
                                                <td>Rich in plant-based protein and essential amino acids. Supports
                                                    muscle
                                                    growth and repair, improves skin health, and provides a good source
                                                    of
                                                    iron.</td>
                                                <td>250</td>
                                                <td>14g</td>
                                                <td>20g</td>
                                                <td>15g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Gobi Manchurian</td>
                                                <td>Cauliflower, garlic, soy sauce, cornstarch, green chilies, ginger,
                                                    onion, sesame seeds.</td>
                                                <td>Rich in antioxidants and anti-inflammatory properties. Supports
                                                    heart
                                                    health and aids in digestion.</td>
                                                <td>230</td>
                                                <td>12g</td>
                                                <td>5g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Kathi Roll</td>
                                                <td>Whole wheat paratha, tofu, onion, bell peppers, lettuce, cucumber,
                                                    tamarind chutney.</td>
                                                <td>High in fiber, antioxidants, and healthy fats. Promotes healthy
                                                    digestion and heart health, and supports skin health.</td>
                                                <td>300</td>
                                                <td>15g</td>
                                                <td>14g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Rajma (Kidney Bean Curry)</td>
                                                <td>Kidney beans, tomatoes, onions, garlic, cumin, coriander, garam
                                                    masala.
                                                </td>
                                                <td>Rich in protein, fiber, iron, and folate. Supports heart health,
                                                    aids in
                                                    digestion, and helps in regulating blood sugar levels.</td>
                                                <td>250</td>
                                                <td>8g</td>
                                                <td>15g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Methi Thepla</td>
                                                <td>Whole wheat flour, fenugreek leaves, cumin, turmeric, ginger.</td>
                                                <td>Rich in iron, fiber, antioxidants, and helps in regulating blood
                                                    sugar
                                                    levels, improving digestion, and boosting immunity.</td>
                                                <td>180</td>
                                                <td>7g</td>
                                                <td>5g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Pulao with Tofu</td>
                                                <td>Basmati rice, mixed vegetables, tofu, cumin, coriander, cinnamon,
                                                    turmeric.</td>
                                                <td>Provides a complete protein source, high in fiber, antioxidants, and
                                                    essential vitamins. Supports digestion and boosts energy.</td>
                                                <td>300</td>
                                                <td>10g</td>
                                                <td>15g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Poha</td>
                                                <td>Flattened rice, peas, peanuts, mustard seeds, curry leaves,
                                                    turmeric,
                                                    lemon juice.</td>
                                                <td>Rich in antioxidants and vitamin C. Supports digestion, boosts
                                                    energy
                                                    levels, and is a great breakfast option.</td>
                                                <td>200</td>
                                                <td>8g</td>
                                                <td>6g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Mung Dal Khichdi</td>
                                                <td>Mung dal, rice, cumin, turmeric, ginger, garlic, mustard seeds.</td>
                                                <td>Rich in protein and fiber. Supports digestive health, boosts
                                                    immunity,
                                                    and helps with weight loss.</td>
                                                <td>220</td>
                                                <td>6g</td>
                                                <td>12g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Sabudana Khichdi</td>
                                                <td>Tapioca pearls, peanuts, potatoes, cumin, mustard seeds, curry
                                                    leaves.
                                                </td>
                                                <td>Rich in carbohydrates and fiber. Provides quick energy, supports
                                                    digestion, and is a great option for fasting.</td>
                                                <td>240</td>
                                                <td>10g</td>
                                                <td>6g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Pesarattu</td>
                                                <td>Green moong dal, onions, ginger, cumin, green chilies, coriander.
                                                </td>
                                                <td>High in protein, fiber, and antioxidants. Helps control blood sugar,
                                                    supports heart health, and boosts digestion.</td>
                                                <td>180</td>
                                                <td>5g</td>
                                                <td>12g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Gajar Halwa</td>
                                                <td>Carrots, almond milk, cardamom, coconut sugar, ghee (vegan butter).
                                                </td>
                                                <td>High in fiber, vitamin A, and antioxidants. Supports eye health,
                                                    boosts
                                                    immunity, and promotes skin health.</td>
                                                <td>180</td>
                                                <td>10g</td>
                                                <td>3g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Coconut Ladoo</td>
                                                <td>Grated coconut, dates, cardamom, coconut oil.</td>
                                                <td>Rich in healthy fats, fiber, and antioxidants. Provides instant
                                                    energy,
                                                    supports digestive health, and enhances immunity.</td>
                                                <td>150</td>
                                                <td>8g</td>
                                                <td>3g</td>
                                                <td>20g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Kadhi Pakora</td>
                                                <td>Chickpea flour (besan), soy yogurt, onions, garlic, ginger, cumin,
                                                    mustard seeds, curry leaves.</td>
                                                <td>Rich in protein, fiber, and probiotics. Supports gut health,
                                                    improves
                                                    digestion, and provides essential vitamins and minerals.</td>
                                                <td>300</td>
                                                <td>15g</td>
                                                <td>10g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Dahi Puri</td>
                                                <td>Puffed rice, potatoes, onions, tamarind chutney, vegan yogurt,
                                                    cumin,
                                                    chaat masala.</td>
                                                <td>High in fiber, antioxidants, and probiotics from vegan yogurt.
                                                    Supports
                                                    gut health, digestion, and boosts immunity.</td>
                                                <td>250</td>
                                                <td>9g</td>
                                                <td>7g</td>
                                                <td>38g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegan Moong Bean Sprouts Stir-fry</td>
                                                <td>Moong beans, carrots, peas, bell peppers, garlic, cumin, coriander,
                                                    turmeric.</td>
                                                <td>High in protein, fiber, and antioxidants. Aids digestion, supports
                                                    weight loss, and promotes heart health.</td>
                                                <td>180</td>
                                                <td>5g</td>
                                                <td>12g</td>
                                                <td>30g</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="juices" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients</th>
                                                <th>Calories</th>
                                                <th>Fat</th>
                                                <th>Protein</th>
                                                <th>Carbs</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Abc Juice (300ml)</td>
                                                <td>Helps in improving the metabolism and boosts the metabolic rate
                                                    which
                                                    further helps in better digestion and weight management apart from
                                                    that
                                                    this high in fibre and low in calories juice and can help in
                                                    reducing
                                                    belly fat faster.and this juice no added sugar add only honey.</td>
                                                <td>178 kcal</td>
                                                <td>0.3g</td>
                                                <td>2g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Papaya Juice</td>
                                                <td>The possible health benefits of consuming papaya included a reduced
                                                    risk
                                                    of heart disease diabetes cancer aiding in digestion improving blood
                                                    glucose control in people with diabetes lowering blood pressure and
                                                    improving wound healing. And this juice no added sugar only add
                                                    honey.
                                                </td>
                                                <td>106 kcal</td>
                                                <td>0.2g</td>
                                                <td>1.1g</td>
                                                <td>27g</td>
                                            </tr>
                                            <tr>
                                                <td>Watermelon Juice</td>
                                                <td>Watermelon juice it is a pure. We will not add any water or sugar we
                                                    will add only honey.</td>
                                                <td>175 kcal</td>
                                                <td>0 g</td>
                                                <td>1g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Orange Juice</td>
                                                <td>Orange juice is favorite beverages high in antioxidant and micro
                                                    nutrients like vitamin c folate and potassium regular construction
                                                    has
                                                    been associated with several health benefits including.and this
                                                    juice no
                                                    added sugar and water add only honey.</td>
                                                <td>174 kcal</td>
                                                <td>0.5g</td>
                                                <td>3g</td>
                                                <td>42g</td>
                                            </tr>
                                            <tr>
                                                <td>Pineapple Juice</td>
                                                <td>It's high in vitamin c which can help protect your body against the
                                                    common cold it also contain enzymes that have been shown to active a
                                                    health immune system response triggers your body ability to fight
                                                    pain
                                                    and reduce swelling.</td>
                                                <td>174-184 kcal</td>
                                                <td>0.5g</td>
                                                <td>1-2g</td>
                                                <td>46-51g</td>
                                            </tr>
                                            <tr>
                                                <td>Mango Juice</td>
                                                <td>Rich in protective antioxidants.mangos are a good source of
                                                    protectives
                                                    compounds with antioxidant properties, these plant chemicals include
                                                    gallotannins and mangiferin. This juice has lot of health benefits /
                                                    aid
                                                    digestion, help maintain healthy skin and hair/support heart health
                                                    support eye health.</td>
                                                <td>220-274 kcal</td>
                                                <td>0.5g</td>
                                                <td>2-3g</td>
                                                <td>55-66g</td>
                                            </tr>
                                            <tr>
                                                <td>Banana Milkshake Juice</td>
                                                <td>Nutrient contents. banana fruit is very nutritious and yummy. work
                                                    boost. This milkshake aid in boosting your muscle and glycogen.
                                                    Store.
                                                    Aid in weight gain, aid in weight loss. helps in diarrhea, fuel for
                                                    healthy skin. vital for pregnant women reduces hair fall.</td>
                                                <td>230-250 kcal</td>
                                                <td>7g</td>
                                                <td>9g</td>
                                                <td>40-45g</td>
                                            </tr>
                                            <tr>
                                                <td>Pomegranate Pure Juice</td>
                                                <td>Pomegranate Pure Juice is a nutrient-rich drink, offering 120-150
                                                    calories, 30g carbs, and 25g sugars per 250ml, packed with
                                                    antioxidants,
                                                    vitamin C, and potassium for heart and immune health.</td>
                                                <td>174-204 kcal</td>
                                                <td>1g</td>
                                                <td>2-3g</td>
                                                <td>41-46g</td>
                                            </tr>
                                            <tr>
                                                <td>Sapota Milkshake Juice</td>
                                                <td>Sapota juice has lot of health benefits. Source of energy.sapota is
                                                    rich
                                                    in glucose and calories that make it a source of energy /boost
                                                    immunity/
                                                    skin benefits/hair benefits/promote gut health/good for bones/best
                                                    for
                                                    mommies-to-be/cancer benefits /and no added sugar only add honey.
                                                </td>
                                                <td>280-310 kcal</td>
                                                <td>8g</td>
                                                <td>9g</td>
                                                <td>52-57g</td>
                                            </tr>
                                            <tr>
                                                <td>Grape Juice</td>
                                                <td>Grape juice is a good source of several important nutrients
                                                    including
                                                    vitamin c, manganese.and antioxidants. it's also linked to several
                                                    health benefits. For example it may support heart health. Immune
                                                    function, and digestive health however,it's also high in sugar and
                                                    has
                                                    less fiber than whole fruit no added sugar add only honey.</td>
                                                <td>150-185 kcal</td>
                                                <td>0.3g</td>
                                                <td>1g</td>
                                                <td>35-45g</td>
                                            </tr>
                                            <tr>
                                                <td>Lemon Honey Juice</td>
                                                <td>Lemon and honey water is like a healthy elixir. A powerhouse of
                                                    nutrients.several studies claim that this drink helps in burning fat
                                                    clears acne and flushes out toxins from the body.</td>
                                                <td>32-55 kcal</td>
                                                <td>0g</td>
                                                <td>0g</td>
                                                <td>9-14g</td>
                                            </tr>
                                            <tr>
                                                <td>Carrot Juice</td>
                                                <td>Carrot Juice is a refreshing, naturally sweet beverage packed with
                                                    vitamin A, beta-carotene, and antioxidants. A typical 250ml serving
                                                    contains about 100-120 calories, 25g of carbohydrates, and 20g of
                                                    natural sugars, promoting eye health, skin health, and boosting
                                                    immunity.</td>
                                                <td>80-120 kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>21-31g</td>
                                            </tr>
                                            <tr>
                                                <td>Beetroot Juice</td>
                                                <td>Beetroot Juice is a nutrient-dense drink rich in folate, vitamin C,
                                                    and
                                                    antioxidants, known for boosting stamina and supporting heart
                                                    health. A
                                                    250ml serving typically contains around 100-120 calories, 25g of
                                                    carbohydrates, and 20g of natural sugars, along with potassium and
                                                    nitrates that promote better circulation.</td>
                                                <td>60-100 kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>16-26g</td>
                                            </tr>
                                            <tr>
                                                <td>Jeevan</td>
                                                <td>Ashgourd, Cucumber, Lemon -This juice is hydrating, low in calories,
                                                    and
                                                    rich in antioxidants, supporting detox, skin health, digestion, and
                                                    immunity. It’s a light, refreshing option with minimal fat and
                                                    natural
                                                    sugars.</td>
                                                <td>30-40 kcal</td>
                                                <td>0-1g</td>
                                                <td>1g</td>
                                                <td>8-10g</td>
                                            </tr>
                                            <tr>
                                                <td>Amrit</td>
                                                <td>Apple, Beetroot, Carrot -This juice is packed with vitamins,
                                                    supporting
                                                    energy, detox, and skin health. It's hydrating, low in calories, and
                                                    rich in antioxidants, while promoting digestion and boosting
                                                    immunity. A
                                                    refreshing, nutrient-dense option with natural sweetness.</td>
                                                <td>120-140 kcal</td>
                                                <td>0.5-1g</td>
                                                <td>1-2g</td>
                                                <td>30-35g</td>
                                            </tr>
                                            <tr>
                                                <td>Tript</td>
                                                <td>Pineapple, Mosambi, Lemon -This juice is rich in vitamin C, supports
                                                    immunity, and provides a refreshing, tangy, and hydrating drink.
                                                </td>
                                                <td>100-120 kcal</td>
                                                <td>0-1g</td>
                                                <td>1g</td>
                                                <td>25-30g</td>
                                            </tr>
                                            <tr>
                                                <td>Sanjeevani</td>
                                                <td>Watermelon, Apple, Lime -This juice is hydrating, rich in vitamin C,
                                                    and
                                                    offers a refreshing, low-calorie drink that supports immunity and
                                                    digestion.</td>
                                                <td>90-110 kcal</td>
                                                <td>-0.5g</td>
                                                <td>1g</td>
                                                <td>23-27g</td>
                                            </tr>
                                            <tr>
                                                <td>Saundraya</td>
                                                <td>Orange, Carrot, Lemon - Orange, carrot, and lemon juice boosts eye
                                                    health, enhances skin collagen, supports detox, improves digestion,
                                                    and
                                                    promotes heart health, all while providing a natural energy boost.
                                                </td>
                                                <td>120-140 kcal</td>
                                                <td>0-1g</td>
                                                <td>2g</td>
                                                <td>30-35g</td>
                                            </tr>
                                            <tr>
                                                <td>Urja</td>
                                                <td>Cucumber, Spinach, Parsley -This juice is low in calories, rich in
                                                    vitamins and minerals, promoting hydration, detoxification, and
                                                    healthy
                                                    digestion. It’s also a good source of antioxidants and supports skin
                                                    health, while being high in fiber and promoting overall wellness.
                                                </td>
                                                <td>30-40 kcal</td>
                                                <td>0.5-1g</td>
                                                <td>2-3g</td>
                                                <td>6-8g</td>
                                            </tr>
                                            <tr>
                                                <td>Bitter Guard</td>
                                                <td>Bitter gourd and cucumber juice helps regulate blood sugar, aids
                                                    digestion, promotes hydration, and supports detoxification and skin
                                                    health. It’s low in calories and rich in antioxidants.</td>
                                                <td>20-30 kcal</td>
                                                <td>-0.5g</td>
                                                <td>1-2g</td>
                                                <td>5-8g</td>
                                            </tr>
                                            <tr>
                                                <td>Green Detox Juice</td>
                                                <td>Spinach, Cucumber, Celery, Lemon, Ginger - Detoxifies the body,
                                                    supports
                                                    digestion, boosts metabolism, rich in antioxidants.</td>
                                                <td>60 kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>14g</td>
                                            </tr>
                                            <tr>
                                                <td>Aloe-Citrus Juice</td>
                                                <td>Aloe Vera, Orange, Lemon, Honey -Improves digestion, boosts
                                                    immunity,
                                                    supports hydration.</td>
                                                <td>70 kcal</td>
                                                <td>0g</td>
                                                <td>0g</td>
                                                <td>18g</td>
                                            </tr>
                                            <tr>
                                                <td>Cucumber Mint Juice</td>
                                                <td>Cucumber, Mint Leaves, Lemon, Honey - Benefits: Hydrates the body,
                                                    supports weight loss, has cooling properties, reduces bloating.</td>
                                                <td>45 kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>11g</td>
                                            </tr>
                                            <tr>
                                                <td>Pineapple Ginger Juice</td>
                                                <td>Pineapple, Ginger, Lemon -Benefits: Improves digestion, reduces
                                                    inflammation, boosts immunity.</td>
                                                <td>110 kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Apple-Celery Juice</td>
                                                <td>Apples, Celery, Lemon - Benefits: Aids digestion, detoxifies,
                                                    improves
                                                    skin health, and balances blood pressure.</td>
                                                <td>80 kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>21g</td>
                                            </tr>
                                            <tr>
                                                <td>Carrot-Orange Juice</td>
                                                <td>Carrots, Oranges - Benefits: Rich in Vitamin C and A, supports eye
                                                    health, boosts immunity, and improves skin.</td>
                                                <td>120 kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Tomato Basil Juice</td>
                                                <td>Tomatoes, Basil Leaves, Lemon, Black Salt - Benefits: Supports heart
                                                    health, rich in antioxidants, improves digestion, anti-inflammatory.
                                                </td>
                                                <td>50 kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Beetroot Lemon Juice</td>
                                                <td>Beetroot, Lemon, Honey - Benefits: Improves blood circulation,
                                                    supports
                                                    liver detoxification, rich in folate and antioxidants.</td>
                                                <td>110 kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>26g</td>
                                            </tr>
                                            <tr>
                                                <td>Chia Seed Lemonade</td>
                                                <td>Chia Seeds, Lemon, Honey, Water - Benefits: Promotes hydration,
                                                    boosts
                                                    metabolism, high in Omega-3s, supports digestive health.</td>
                                                <td>80 kcal</td>
                                                <td>3g</td>
                                                <td>2g</td>
                                                <td>14g</td>
                                            </tr>
                                            <tr>
                                                <td>Coconut Water Smoothie</td>
                                                <td>Coconut Water, Banana, Pineapple - Benefits: Hydrates, supports
                                                    digestion, replenishes electrolytes, boosts energy.</td>
                                                <td>100 kcal</td>
                                                <td>1g</td>
                                                <td>1g</td>
                                                <td>24g</td>
                                            </tr>
                                            <tr>
                                                <td>Papaya Pineapple Juice</td>
                                                <td>Papaya, Pineapple - Benefits: Aids digestion, rich in Vitamin C,
                                                    improves skin health.</td>
                                                <td>120 kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Turmeric Lemon Juice</td>
                                                <td>Turmeric, Lemon, Honey, Water - Benefits: Reduces inflammation,
                                                    detoxifies the liver, boosts immunity, improves skin.</td>
                                                <td>50 kcal</td>
                                                <td>0g</td>
                                                <td>0g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Ginger Lemonade</td>
                                                <td>Ingredients: Ginger, Lemon, Honey, Water - Benefits: Boosts
                                                    immunity,
                                                    improves digestion, relieves nausea, anti-inflammatory.</td>
                                                <td>50 Kcal</td>
                                                <td>0g</td>
                                                <td>0g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Pomegranate Cucumber Juice</td>
                                                <td>Ingredients: Pomegranate, Cucumber, Mint, Lime - Benefits:
                                                    Detoxifies,
                                                    boosts heart health, improves hydration.</td>
                                                <td>70 Kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>18g</td>
                                            </tr>
                                            <tr>
                                                <td>Mint Lemon Detox Juice</td>
                                                <td>Ingredients: Mint Leaves, Lemon, Cucumber, Honey - Benefits:
                                                    Hydrates,
                                                    promotes detox, supports digestion, reduces bloating.</td>
                                                <td>45 Kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Watermelon Basil Juice</td>
                                                <td>Ingredients: Watermelon, Basil Leaves, Lemon - Benefits: Hydrates,
                                                    reduces inflammation, rich in antioxidants.</td>
                                                <td>60 Kcal</td>
                                                <td>0g</td>
                                                <td>1g</td>
                                                <td>15g</td>
                                            </tr>
                                            <tr>
                                                <td>Cantaloupe Carrot Juice</td>
                                                <td>Ingredients: Cantaloupe, Carrots, Ginger - Benefits: Supports skin
                                                    health, improves vision, rich in Vitamin A.</td>
                                                <td>90 Kcal</td>
                                                <td>0g</td>
                                                <td>2g</td>
                                                <td>22g</td>
                                            </tr>
                                            <tr>
                                                <td>Mango Lassi</td>
                                                <td>Ingredients: Mango, Yogurt, Honey, Cardamom - Benefits: Improves
                                                    digestion, rich in probiotics, boosts immunity.</td>
                                                <td>160 Kcal</td>
                                                <td>3g</td>
                                                <td>5g</td>
                                                <td>35g</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="breakfastveg" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients/Benefits</th>
                                                <th>Calories</th>
                                                <th>Fat (g)</th>
                                                <th>Protein (g)</th>
                                                <th>Carbs (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Poha</td>
                                                <td>Ingredients: Flattened rice, peanuts, peas, mustard seeds, curry
                                                    leaves,
                                                    turmeric. <br> Benefits: Flattened rice is easy to digest, peanuts
                                                    provide protein, peas offer fiber, mustard seeds and curry leaves
                                                    aid
                                                    digestion, and turmeric has anti-inflammatory properties.</td>
                                                <td>200</td>
                                                <td>7</td>
                                                <td>5</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Upma</td>
                                                <td>Ingredients: Semolina, mustard seeds, curry leaves, peas, carrots,
                                                    onions. <br> Benefits: Semolina provides energy, mustard seeds boost
                                                    metabolism, curry leaves aid digestion, peas and carrots add fiber
                                                    and
                                                    vitamins, while onions have antioxidants.</td>
                                                <td>220</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>32</td>
                                            </tr>
                                            <tr>
                                                <td>Idli</td>
                                                <td>Ingredients: Rice, urad dal, fermented batter, sambhar, coconut
                                                    chutney.
                                                    <br> Benefits: Rice provides carbs for energy, urad dal is high in
                                                    protein and fiber, fermentation improves digestion, sambhar adds
                                                    protein
                                                    and vitamins, and coconut chutney provides healthy fats.
                                                </td>
                                                <td>150</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Dosa</td>
                                                <td>Ingredients: Rice, urad dal, fermented batter, potato (optional).
                                                    <br>
                                                    Benefits: Rice offers energy, urad dal is rich in protein and fiber,
                                                    fermentation promotes gut health, and potatoes provide fiber and
                                                    vitamin
                                                    C.</td>
                                                <td>220</td>
                                                <td>6</td>
                                                <td>4</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>Thepla</td>
                                                <td>Ingredients: Whole wheat flour, fenugreek (methi), spices (turmeric,
                                                    cumin, etc.). <br> Benefits: Whole wheat flour provides fiber,
                                                    fenugreek
                                                    aids in blood sugar control, and spices help boost metabolism and
                                                    digestion.</td>
                                                <td>150</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>Paratha</td>
                                                <td>Ingredients: Whole wheat flour, potatoes, cauliflower, ghee, spices.
                                                    <br> Benefits: Whole wheat flour offers complex carbs and fiber,
                                                    potatoes provide potassium, cauliflower is rich in vitamin C, and
                                                    ghee
                                                    gives healthy fats.
                                                </td>
                                                <td>250</td>
                                                <td>10</td>
                                                <td>6</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>Aloo Tikki</td>
                                                <td>Ingredients: Potatoes, peas, spices (cumin, coriander, etc.), oil
                                                    (shallow fry). <br> Benefits: Potatoes provide carbs and fiber, peas
                                                    are
                                                    rich in protein, and spices improve digestion. Shallow frying
                                                    reduces
                                                    oil absorption.</td>
                                                <td>180</td>
                                                <td>6</td>
                                                <td>4</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Moong Dal Chilla</td>
                                                <td>Ingredients: Moong dal (yellow lentils), onions, tomatoes, green
                                                    chilies, spices. <br> Benefits: Moong dal is high in protein and
                                                    fiber,
                                                    onions and tomatoes provide antioxidants, and spices promote
                                                    digestion.
                                                </td>
                                                <td>200</td>
                                                <td>4</td>
                                                <td>12</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Vegetable Sandwich</td>
                                                <td>Ingredients: Whole wheat bread, cucumber, tomato, lettuce, cheese or
                                                    paneer (optional). <br> Benefits: Whole wheat bread provides fiber,
                                                    cucumber hydrates, tomato has antioxidants, lettuce is rich in
                                                    vitamin
                                                    K, and cheese or paneer adds protein.</td>
                                                <td>180</td>
                                                <td>4</td>
                                                <td>6</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Methi Thepla</td>
                                                <td>Ingredients: Fenugreek leaves (methi), whole wheat flour, spices.
                                                    <br>
                                                    Benefits: Fenugreek helps with blood sugar control, whole wheat
                                                    flour
                                                    provides fiber, and spices aid digestion and metabolism.</td>
                                                <td>160</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>28</td>
                                            </tr>
                                            <tr>
                                                <td>Masala Oats</td>
                                                <td>Ingredients: Oats, mixed vegetables (carrot, peas, beans), spices
                                                    (turmeric, garam masala). <br> Benefits: Oats are high in fiber and
                                                    heart-healthy, vegetables add vitamins and antioxidants, and spices
                                                    improve digestion.</td>
                                                <td>210</td>
                                                <td>5</td>
                                                <td>7</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>Chana Chaat</td>
                                                <td>Ingredients: Boiled chickpeas, onions, tomatoes, cucumber, lemon
                                                    juice,
                                                    spices. <br> Benefits: Chickpeas are a good source of protein and
                                                    fiber,
                                                    onions and tomatoes provide antioxidants, and lemon boosts immunity.
                                                </td>
                                                <td>180</td>
                                                <td>3</td>
                                                <td>9</td>
                                                <td>28</td>
                                            </tr>
                                            <tr>
                                                <td>Sabudana Khichdi</td>
                                                <td>Ingredients: Sabudana (tapioca pearls), peanuts, potatoes, cumin,
                                                    curry
                                                    leaves. <br> Benefits: Sabudana provides quick energy, peanuts are a
                                                    good source of protein, potatoes add fiber, and cumin helps with
                                                    digestion.</td>
                                                <td>250</td>
                                                <td>12</td>
                                                <td>5</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Rava Kesari</td>
                                                <td>Ingredients: Semolina, sugar, ghee, cashews, cardamom. <br>
                                                    Benefits:
                                                    Semolina is a quick energy source, sugar provides instant energy,
                                                    ghee
                                                    adds healthy fats, and cashews offer protein and healthy fats.</td>
                                                <td>220</td>
                                                <td>10</td>
                                                <td>4</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Kachori</td>
                                                <td>Ingredients: Whole wheat flour, spiced lentil or pea filling,
                                                    deep-fried. <br> Benefits: Whole wheat flour provides fiber, lentils
                                                    or
                                                    peas offer protein, and deep-frying (in moderation) adds crispiness.
                                                </td>
                                                <td>250</td>
                                                <td>12</td>
                                                <td>6</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>Besan Cheela</td>
                                                <td>Ingredients: Chickpea flour, onions, tomatoes, green chilies,
                                                    spices.
                                                    <br> Benefits: Chickpea flour is rich in protein, onions and
                                                    tomatoes
                                                    provide antioxidants, and spices aid digestion and metabolism.
                                                </td>
                                                <td>200</td>
                                                <td>6</td>
                                                <td>10</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>Pesarattu</td>
                                                <td>Ingredients: Green moong dal (green gram), ginger, green chilies,
                                                    spices. <br> Benefits: Moong dal is high in protein and fiber,
                                                    ginger
                                                    aids digestion, and green chilies boost metabolism.</td>
                                                <td>180</td>
                                                <td>4</td>
                                                <td>8</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Curd Rice</td>
                                                <td>Ingredients: Rice, yogurt, mustard seeds, curry leaves, green
                                                    chilies.
                                                    <br> Benefits: Rice provides energy, yogurt offers probiotics,
                                                    mustard
                                                    seeds and curry leaves support digestion, and green chilies enhance
                                                    metabolism.
                                                </td>
                                                <td>210</td>
                                                <td>6</td>
                                                <td>6</td>
                                                <td>32</td>
                                            </tr>
                                            <tr>
                                                <td>Vegetable Dhokla</td>
                                                <td>Ingredients: Rice, chickpea flour, mustard seeds, curry leaves,
                                                    green
                                                    chilies. <br> Benefits: Chickpea flour is high in protein, rice
                                                    provides
                                                    energy, and mustard seeds and curry leaves aid digestion.</td>
                                                <td>180</td>
                                                <td>3</td>
                                                <td>7</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Ragda Pattice</td>
                                                <td>Ingredients: White peas, potatoes, onions, tomatoes, chutney,
                                                    spices.
                                                    <br> Benefits: White peas are rich in protein, potatoes provide
                                                    fiber,
                                                    onions and tomatoes have antioxidants, and chutney adds flavor and
                                                    benefits.
                                                </td>
                                                <td>250</td>
                                                <td>8</td>
                                                <td>7</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>Oats Idli</td>
                                                <td>Ingredients: Oats, rice flour, fermented batter, mixed vegetables
                                                    (carrot, peas). <br> Benefits: Oats are heart-healthy, rice flour
                                                    provides energy, fermentation helps with digestion, and vegetables
                                                    add
                                                    nutrition.</td>
                                                <td>160</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>28</td>
                                            </tr>
                                            <tr>
                                                <td>Dhokla</td>
                                                <td>Ingredients: Chickpea flour, rice flour, mustard seeds, curry
                                                    leaves,
                                                    green chilies. <br> Benefits: Chickpea flour is rich in protein,
                                                    rice
                                                    flour provides carbs, and mustard seeds and curry leaves aid
                                                    digestion.
                                                </td>
                                                <td>150</td>
                                                <td>2</td>
                                                <td>6</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>Moong Dal Khichdi</td>
                                                <td>Ingredients: Moong dal, rice, turmeric, ghee, cumin, ginger. <br>
                                                    Benefits: Moong dal provides protein and fiber, rice gives energy,
                                                    turmeric has anti-inflammatory benefits, and ghee provides healthy
                                                    fats.
                                                </td>
                                                <td>210</td>
                                                <td>5</td>
                                                <td>9</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Fruit Salad with Yogurt</td>
                                                <td>Ingredients: Mixed fruits (apple, banana, berries), yogurt, honey,
                                                    nuts
                                                    (almonds, walnuts). <br> Benefits: Fruits provide vitamins and
                                                    antioxidants, yogurt offers probiotics, honey adds natural
                                                    sweetness,
                                                    and nuts provide healthy fats.</td>
                                                <td>200</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>Mooli Paratha</td>
                                                <td>Ingredients: Whole wheat flour, radish (mooli), spices. <br>
                                                    Benefits:
                                                    Whole wheat flour is fiber-rich, radish is a low-calorie vegetable
                                                    with
                                                    vitamin C, and spices aid digestion.</td>
                                                <td>220</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Paneer Bhurji</td>
                                                <td>Ingredients: Paneer, onions, tomatoes, green chilies, turmeric,
                                                    spices.
                                                    <br> Benefits: Paneer is a rich source of protein, onions and
                                                    tomatoes
                                                    provide antioxidants, and spices boost digestion.
                                                </td>
                                                <td>250</td>
                                                <td>15</td>
                                                <td>18</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Sprout Salad</td>
                                                <td>Ingredients: Sprouted beans (moong, chickpeas), cucumber, tomato,
                                                    lemon
                                                    juice. <br> Benefits: Sprouted beans are high in protein, cucumber
                                                    hydrates, tomato provides antioxidants, and lemon boosts immunity.
                                                </td>
                                                <td>150</td>
                                                <td>4</td>
                                                <td>9</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>Corn and Vegetable Pancake</td>
                                                <td>Ingredients: Corn, carrots, onions, green chilies, spices. <br>
                                                    Benefits: Corn provides fiber, carrots are rich in vitamin A, onions
                                                    have antioxidants, and spices boost metabolism.</td>
                                                <td>200</td>
                                                <td>6</td>
                                                <td>5</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Sago (Sabudana) Vada</td>
                                                <td>Ingredients: Tapioca pearls (sabudana), peanuts, potatoes, cumin,
                                                    curry
                                                    leaves. <br> Benefits: Tapioca provides carbs, peanuts offer
                                                    protein,
                                                    potatoes add fiber, and cumin aids digestion.</td>
                                                <td>240</td>
                                                <td>12</td>
                                                <td>5</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Porridge</td>
                                                <td>Ingredients: Oats or semolina, milk or water, nuts (almonds,
                                                    cashews).
                                                    <br> Benefits: Oats provide fiber, milk adds calcium, and nuts offer
                                                    healthy fats and protein.
                                                </td>
                                                <td>180</td>
                                                <td>5</td>
                                                <td>7</td>
                                                <td>28</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="breakfastnonveg" class="tab-pane fade show p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Ingredients & Benefits</th>
                                                <th>Calories</th>
                                                <th>Fat (g)</th>
                                                <th>Protein (g)</th>
                                                <th>Carbs (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Egg Bhurji</td>
                                                <td>Ingredients: Eggs, onions, tomatoes, green chilies, spices. <br>
                                                    Benefits: High in protein, good for muscle repair and brain
                                                    function.
                                                </td>
                                                <td>180</td>
                                                <td>14g</td>
                                                <td>12g</td>
                                                <td>2g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Keema Paratha</td>
                                                <td>Ingredients: Ground chicken, wheat flour, spices, yogurt. <br>
                                                    Benefits:
                                                    Rich in protein and energy-boosting carbs.</td>
                                                <td>250</td>
                                                <td>12g</td>
                                                <td>18g</td>
                                                <td>24g</td>
                                            </tr>
                                            <tr>
                                                <td>Methi Thepla with Egg</td>
                                                <td>Ingredients: Fenugreek leaves, whole wheat flour, eggs, spices. <br>
                                                    Benefits: High in fiber, iron, and protein. Helps with digestion and
                                                    boosts immunity.</td>
                                                <td>220</td>
                                                <td>10g</td>
                                                <td>12g</td>
                                                <td>22g</td>
                                            </tr>
                                            <tr>
                                                <td>Omelette with Veggies</td>
                                                <td>Ingredients: Eggs, onions, tomatoes, spinach, mushrooms. <br>
                                                    Benefits:
                                                    Packed with vitamins and minerals, aids in muscle repair.</td>
                                                <td>150</td>
                                                <td>12g</td>
                                                <td>13g</td>
                                                <td>4g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg Paratha</td>
                                                <td>Ingredients: Whole wheat flour, eggs, spices, ghee. <br> Benefits:
                                                    Provides a balanced mix of protein and healthy fats, ideal for
                                                    energy.
                                                </td>
                                                <td>300</td>
                                                <td>18g</td>
                                                <td>16g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Prawn Masala</td>
                                                <td>Ingredients: Prawns, tomatoes, onions, garlic, ginger, spices. <br>
                                                    Benefits: Rich in Omega-3 fatty acids and protein, promotes heart
                                                    health.</td>
                                                <td>220</td>
                                                <td>10g</td>
                                                <td>25g</td>
                                                <td>8g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Sandwich</td>
                                                <td>Ingredients: Whole wheat bread, grilled chicken, lettuce, tomato.
                                                    <br>
                                                    Benefits: High in protein and fiber, supports muscle growth and
                                                    digestion.</td>
                                                <td>350</td>
                                                <td>15g</td>
                                                <td>28g</td>
                                                <td>35g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish Curry with Rice</td>
                                                <td>Ingredients: Fish, rice, onions, tomatoes, coconut milk, spices.
                                                    <br>
                                                    Benefits: Rich in protein, essential fatty acids, and a good source
                                                    of
                                                    vitamins and minerals.</td>
                                                <td>500</td>
                                                <td>18g</td>
                                                <td>40g</td>
                                                <td>55g</td>
                                            </tr>
                                            <tr>
                                                <td>Scrambled Eggs with Spinach</td>
                                                <td>Ingredients: Eggs, spinach, onions, tomatoes, olive oil. <br>
                                                    Benefits:
                                                    Rich in iron, protein, and vitamins A, C, and K. Good for bone and
                                                    eye
                                                    health.</td>
                                                <td>200</td>
                                                <td>15g</td>
                                                <td>14g</td>
                                                <td>5g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Dosa</td>
                                                <td>Ingredients: Dosa, chicken filling, spices. <br> Benefits: High in
                                                    protein and carbs, good for a long-lasting energy boost.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>20g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish Tikka</td>
                                                <td>Ingredients: Fish, yogurt, spices. <br> Benefits: High in protein
                                                    and
                                                    low in carbs, supports muscle building and healthy metabolism.</td>
                                                <td>220</td>
                                                <td>12g</td>
                                                <td>26g</td>
                                                <td>5g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg and Avocado Toast</td>
                                                <td>Ingredients: Eggs, whole grain bread, avocado. <br> Benefits:
                                                    Provides
                                                    healthy fats, fiber, and protein. Aids in muscle growth and supports
                                                    heart health.</td>
                                                <td>320</td>
                                                <td>18g</td>
                                                <td>15g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken and Spinach Soup</td>
                                                <td>Ingredients: Chicken, spinach, ginger, garlic, spices. <br>
                                                    Benefits:
                                                    High in protein, iron, and antioxidants, boosts immune health.</td>
                                                <td>150</td>
                                                <td>5g</td>
                                                <td>18g</td>
                                                <td>4g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg Curry</td>
                                                <td>Ingredients: Eggs, tomatoes, onions, spices. <br> Benefits: Rich in
                                                    protein, vitamins, and healthy fats. Supports muscle repair and
                                                    immune
                                                    function.</td>
                                                <td>250</td>
                                                <td>18g</td>
                                                <td>15g</td>
                                                <td>8g</td>
                                            </tr>
                                            <tr>
                                                <td>Mutton Keema Paratha</td>
                                                <td>Ingredients: Ground mutton, whole wheat flour, spices. <br>
                                                    Benefits:
                                                    High in protein, iron, and essential nutrients, helps build and
                                                    repair
                                                    tissues.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>24g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Shawarma</td>
                                                <td>Ingredients: Chicken, pita bread, yogurt, garlic, spices. <br>
                                                    Benefits:
                                                    Rich in protein and fiber, supports metabolism and digestion.</td>
                                                <td>400</td>
                                                <td>16g</td>
                                                <td>30g</td>
                                                <td>36g</td>
                                            </tr>
                                            <tr>
                                                <td>Prawn Biryani</td>
                                                <td>Ingredients: Prawns, basmati rice, yogurt, spices. <br> Benefits:
                                                    High
                                                    in protein, carbs, and essential nutrients. Good for energy and
                                                    muscle
                                                    recovery.</td>
                                                <td>600</td>
                                                <td>20g</td>
                                                <td>40g</td>
                                                <td>75g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg Roll</td>
                                                <td>Ingredients: Whole wheat wrap, eggs, onions, tomatoes, lettuce. <br>
                                                    Benefits: High in protein and fiber, helps with muscle recovery and
                                                    digestion.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>20g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish and Quinoa Salad</td>
                                                <td>Ingredients: Fish, quinoa, olive oil, lemon, veggies. <br> Benefits:
                                                    High in protein, Omega-3, and antioxidants, good for brain health
                                                    and
                                                    metabolism.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>28g</td>
                                                <td>20g</td>
                                            </tr>
                                            <tr>
                                                <td>Chana Chaat with Eggs</td>
                                                <td>Ingredients: Chickpeas, boiled eggs, tomatoes, onions, spices. <br>
                                                    Benefits: Provides protein, fiber, and essential vitamins, helps in
                                                    muscle recovery and digestion.</td>
                                                <td>280</td>
                                                <td>12g</td>
                                                <td>15g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Methi Paratha with Chicken</td>
                                                <td>Ingredients: Fenugreek leaves, chicken, whole wheat flour, spices.
                                                    <br>
                                                    Benefits: High in iron, protein, and fiber, supports digestion and
                                                    muscle health.</td>
                                                <td>300</td>
                                                <td>15g</td>
                                                <td>20g</td>
                                                <td>28g</td>
                                            </tr>
                                            <tr>
                                                <td>Tandoori Chicken</td>
                                                <td>Ingredients: Chicken, yogurt, spices. <br> Benefits: High in
                                                    protein,
                                                    low in carbs, supports weight management and muscle building.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>30g</td>
                                                <td>10g</td>
                                            </tr>
                                            <tr>
                                                <td>Poached Eggs on Toast</td>
                                                <td>Ingredients: Eggs, whole wheat toast, spinach, avocado. <br>
                                                    Benefits:
                                                    Rich in protein and healthy fats, good for digestion, heart health,
                                                    and
                                                    skin.</td>
                                                <td>280</td>
                                                <td>15g</td>
                                                <td>18g</td>
                                                <td>22g</td>
                                            </tr>
                                            <tr>
                                                <td>Kadhi Pakora with Chicken</td>
                                                <td>Ingredients: Gram flour, chicken, yogurt, spices. <br> Benefits:
                                                    Good
                                                    for gut health and provides protein, supports bone and joint health.
                                                </td>
                                                <td>400</td>
                                                <td>20g</td>
                                                <td>28g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Baked Fish with Veggies</td>
                                                <td>Ingredients: Fish, mixed vegetables, olive oil, spices. <br>
                                                    Benefits:
                                                    Low in calories, high in protein, supports heart health and muscle
                                                    recovery.</td>
                                                <td>350</td>
                                                <td>15g</td>
                                                <td>30g</td>
                                                <td>15g</td>
                                            </tr>
                                            <tr>
                                                <td>Prawn Omelette</td>
                                                <td>Ingredients: Prawns, eggs, onions, tomatoes, spices. <br> Benefits:
                                                    High
                                                    in protein and low in carbs, supports metabolism and muscle growth.
                                                </td>
                                                <td>250</td>
                                                <td>14g</td>
                                                <td>22g</td>
                                                <td>5g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Samosa</td>
                                                <td>Ingredients: Chicken, whole wheat dough, spices. <br> Benefits:
                                                    Provides
                                                    protein and carbs, supports energy and muscle repair.</td>
                                                <td>250</td>
                                                <td>14g</td>
                                                <td>18g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Bhurji Pav</td>
                                                <td>Ingredients: Egg bhurji, pav bread, spices. <br> Benefits: High in
                                                    protein, carbs, and essential nutrients, provides long-lasting
                                                    energy.
                                                </td>
                                                <td>300</td>
                                                <td>18g</td>
                                                <td>15g</td>
                                                <td>40g</td>
                                            </tr>
                                            <tr>
                                                <td>Prawn Rava Fry</td>
                                                <td>Ingredients: Prawns, semolina (rava), spices. <br> Benefits: High in
                                                    protein and antioxidants, supports metabolism and skin health.</td>
                                                <td>280</td>
                                                <td>15g</td>
                                                <td>22g</td>
                                                <td>15g</td>
                                            </tr>
                                            <tr>
                                                <td>Vegetable and Chicken Soup</td>
                                                <td>Ingredients: Chicken, vegetables, ginger, garlic, herbs. <br>
                                                    Benefits:
                                                    High in protein and vitamins, boosts immunity and digestive health.
                                                </td>
                                                <td>180</td>
                                                <td>7g</td>
                                                <td>18g</td>
                                                <td>6g</td>
                                            </tr>
                                            <tr>
                                                <td>Mutton Shami Kebab</td>
                                                <td>Ingredients: Mutton, lentils, spices. <br> Benefits: High in protein
                                                    and
                                                    iron, supports muscle and tissue repair.</td>
                                                <td>250</td>
                                                <td>14g</td>
                                                <td>22g</td>
                                                <td>6g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg Pulao</td>
                                                <td>Ingredients: Eggs, basmati rice, vegetables, spices. <br> Benefits:
                                                    Rich
                                                    in protein, carbs, and essential nutrients, supports energy levels
                                                    and
                                                    muscle repair.</td>
                                                <td>400</td>
                                                <td>18g</td>
                                                <td>20g</td>
                                                <td>45g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish Moilee</td>
                                                <td>Ingredients: Fish, coconut milk, spices. <br> Benefits: High in
                                                    Omega-3
                                                    and protein, supports brain function and joint health.</td>
                                                <td>350</td>
                                                <td>20g</td>
                                                <td>30g</td>
                                                <td>12g</td>
                                            </tr>
                                            <tr>
                                                <td>Prawn Masala with Roti</td>
                                                <td>Ingredients: Prawns, whole wheat roti, spices. <br> Benefits: High
                                                    in
                                                    protein and fiber, promotes digestion and muscle growth.</td>
                                                <td>350</td>
                                                <td>18g</td>
                                                <td>26g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Porridge</td>
                                                <td>Ingredients: Chicken, oats, veggies, spices. <br> Benefits: High in
                                                    fiber and protein, supports digestion and sustained energy.</td>
                                                <td>300</td>
                                                <td>10g</td>
                                                <td>22g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Egg Biryani</td>
                                                <td>Ingredients: Eggs, basmati rice, yogurt, spices. <br> Benefits: High
                                                    in
                                                    protein, carbs, and essential nutrients, supports energy and muscle
                                                    recovery.</td>
                                                <td>500</td>
                                                <td>20g</td>
                                                <td>18g</td>
                                                <td>55g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish Masala with Chapati</td>
                                                <td>Ingredients: Fish, whole wheat chapati, spices. <br> Benefits: Rich
                                                    in
                                                    protein and healthy fats, supports metabolism and weight management.
                                                </td>
                                                <td>400</td>
                                                <td>20g</td>
                                                <td>35g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Kheema Pav</td>
                                                <td>Ingredients: Ground chicken, pav bread, onions, spices. <br>
                                                    Benefits:
                                                    High in protein and iron, supports muscle growth and overall health.
                                                </td>
                                                <td>400</td>
                                                <td>18g</td>
                                                <td>25g</td>
                                                <td>30g</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Chettinad</td>
                                                <td>Ingredients: Chicken, coconut, tamarind, spices. <br> Benefits: High
                                                    in
                                                    protein and healthy fats, supports immune health and metabolism.
                                                </td>
                                                <td>450</td>
                                                <td>25g</td>
                                                <td>35g</td>
                                                <td>15g</td>
                                            </tr>
                                            <tr>
                                                <td>Masala Eggs with Roti</td>
                                                <td>Ingredients: Eggs, whole wheat roti, spices. <br> Benefits: High in
                                                    protein and fiber, promotes digestion and muscle repair.</td>
                                                <td>300</td>
                                                <td>18g</td>
                                                <td>20g</td>
                                                <td>25g</td>
                                            </tr>
                                            <tr>
                                                <td>Fish Amritsari</td>
                                                <td>Ingredients: Fish, gram flour, spices. <br> Benefits: High in
                                                    protein
                                                    and low in carbs, helps with muscle repair and supports immune
                                                    function.
                                                </td>
                                                <td>250</td>
                                                <td>14g</td>
                                                <td>22g</td>
                                                <td>10g</td>
                                            </tr>
                                            <tr>
                                                <td>Boiled Eggs with Veggies</td>
                                                <td>Ingredients: Eggs, vegetables, olive oil. <br> Benefits: Provides
                                                    protein, vitamins, and minerals, supports overall health and weight
                                                    management.</td>
                                                <td>220</td>
                                                <td>14g</td>
                                                <td>18g</td>
                                                <td>6g</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
