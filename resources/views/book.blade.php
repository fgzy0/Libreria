<?

use app\controllers\Info;

require 'C:\OSPanel\domains\laravelproject\resources\views\parts\header.blade.php';
?>

<?foreach($products as $product){
        ?>
        <main class="pt-6 mx-auto pb-10 xl:w-[1250px] mm:w-[1400px] lg:w-[1150px] md:w-[768px] 2xl:px-0 xl:px-0 md:px-0 lg:px-0 px-4">
        <div class="inline 2xl:flex xl:flex lg:flex md:flex space-x-5 justify-center mx-auto py-8">
            <div class="img-book mb-8 relative flex justify-center">
                <img class="w-[250px] h-[379px] hover:scale-105 transition-all shadow-2xl rounded-md" src="/public/images/products/<?=$product["img"]?>">
            </div>
            <div class="mb-4 max-w-xl">
                <h1 class="text-4xl font-bold"><?=$product["title"]?></h1>
                <p class=" mt-2 font-sans-medium text-gray text-sm"><?=$product["author"]?> (Автор)</p>
                <p class="mb-5 mt-2 font-sans-medium text-gray text-lg">Жанр: <?=$product["genre"]?></p>
                <div class="mb-4 block font-sans-semibold text-base tracking-wide">
                    <label>Цена:</label>
                    <div class="">
                        <a href="#" class="mb-2 flex flex-wrap rounded p-4 border-2 border-[#de2454] bg-transparent transition-all">
                            <div class="text-lg text-secondary font-sans-medium w-full truncate">Полная версия на русском языке</div>
                            <div class="w-full">
                                <span class="text-3xl text-red-600 line-through mr-1 text-primary"><?=$product["price-full"]?> ₽</span>
                                <span class="text-2xl text-green-500 font-sans-bold"><?=$product["price-discount"]?> ₽</span>
                            </div>
                        </a>
                        <?
                        if($product['quantity'] == '0'){
                            ?>
                            <span class="text-2xl text-red-600">Нет в наличии</span>
                            <div class="mb-6 mt-2">
                            <button class="py-3 px-8 rounded-xl bg-gray-400 text-white hover:bg-black">Узнать о поступлении</button>   
                            </div>
                            <?
                        }else{
                            ?>
                            <span class="text-2xl text-green-500">Есть в наличии</span>
                            <div class="mb-6 mt-2">
                            <button class="py-3 px-8 rounded-xl bg-[#de2454] hover:border-2 hover:border-black hover:bg-[#c41240]">Купить</button>   
                            </div>
                            <?
                        }?>
                    </div>
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold">Описание</h1>
                        <p class="text-base"><?=$product["description"]?></p>
                    </div>
                    <div class="">
                        <h1 class="text-2xl font-bold">Детали продукта</h1>
                        <div class="">
                            <div class="flex justify-normal 2xl:justify-between xl:justify-between lg:justify-between md:justify-between 2xl:space-x-16 xl:space-x-16 lg:space-x-12 md:space-x-8 space-x-2">
                                <div class="font-sans-medium text-right text-s text-gray">Автор</div>
                                <div class="text-left"><?=$product["author"]?></div>
                            </div>
                            <div class="flex justify-normal 2xl:justify-between xl:justify-between lg:justify-between md:justify-between 2xl:space-x-16 xl:space-x-16 lg:space-x-12 md:space-x-8 space-x-2">
                                <div class="font-sans-medium text-right text-s text-gray">Дата публикации</div>
                                <div class="text-left"><?=$product["date"]?></div>
                            </div>
                            <div class="flex justify-normal 2xl:justify-between xl:justify-between lg:justify-between md:justify-between 2xl:space-x-16 xl:space-x-16 lg:space-x-12 md:space-x-8 space-x-2">
                                <div class="font-sans-medium text-right text-s text-gray">Количество страниц</div>
                                <div><?=$product["pages-quantity"]?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <div class="mb-4 mx-6 flex justify-center">
            <div>
                <div class="mb-4 text-3xl font-bold"><a>Похожие товары в жанре <?=$product["genre"]?>:</a></div>
                <div class="pt-6 2xl:pt-2 xl:pt-2 lg:pt-2 md:pt-2 2xl:flex xl:flex lg:flex md:flex inline 2xl:gap-6 xl:gap-6 lg:gap-4 md:gap-2"> 
                    <?
                    
                    foreach($similar as $sim){
                            ?>
                            <div>
                              <div class="hover:scale-105 rounded-sm transition-all w-[185px] 2xl:py-0 xl:py-0 lg:py-0 md:py-0 my-4">
                                  <a class="flex 2xl:inline xl:inline lg:inline md:inline" href="/book/<?=$sim["id"]?>"><img class="w-[185px] h-[270px] rounded-md" src="/public/images/products/<?=$sim["img"]?>">
                                  <div class="pt-2 h-[150px] px-4 2xl:px-0 xl:px-0 lg:px-0 md:px-0">
                                      <div class="inline 2xl:flex xl:flex lg:flex md:flex 2xl:space-x-2 xl:space-x-2 lg:space-x-2 md:space-x-2 items-center">
                                          <p class="text-md text-red-600 line-through mr-1 text-primary"><?=$sim["price-full"]?> ₽</p>
                                          <p class="text-lg text-green-500 font-sans-bold"><?=$sim["price-discount"]?> ₽</p>
                                      </div>
                                      <p class="text-lg font-bold"><?=$sim["title"]?></p>
                                      <p class="text-base"><?=$sim["author"]?></p>
                                  </div></a>
                                  <div class="pt-4 grid grid-cols-3 gap-2">
                                      <button class="col-span-2 py-1 px-1 bg-none rounded-md border-2 border-[#747474] hover:bg-[#cc4bd7] hover:border-none hover:rounded-md transition-all" type="submit">В корзину</button>
                                      <button class="text-2xl hover:bg-[#de2454] hover:rounded-md" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                                  </div>
                              </div>
                            </div>
                            <?  
                            
                            
                        
                    }
                    ?>
                </div>
            </div>
        </div>    
    </main>
        
        
        
        
    <?
}
    ?>
    <? require 'C:\OSPanel\domains\laravelproject\resources\views\parts\footer.blade.php'?>
