<?php
    session_start();
    $proj_root = '/';


    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true){
    header('Location:'.$proj_root.'login');
    exit;
}
?>
<?php include'header.php'?>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">About Forms</h1>

                <div class="flex flex-wrap">
                    <div class="w-full my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> About Form
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="artist_header">Artist Header</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="artist_header" name="artist_header" type="text" required="" placeholder="Artist Header" aria-label="Artist Header" value="<?= $about['artist_header']?>">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="artist_description">Artist Description</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="artist_description" name="artist_description" rows="6" required="" placeholder="Description of Artist" aria-label="Artist Description"><?= $about['artist_description']?></textarea>
                                </div>
                                <div class="" hidden>
                                    <label class="block text-sm text-gray-600" for="artist_image">Artist Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="artist_image" name="artist_image" type="text" required="" placeholder="Artist Image" aria-label="Artist Image" value="samrat">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="artgallery_header">Art Gallery Header</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="artgallery_header" name="artgallery_header" type="text" required="" placeholder="Art Gallery Header" aria-label="Art Gallery Header" value="<?= $about['artgallery_header']?>">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="artgallery_description">Artist Description</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="artgallery_description" name="artgallery_description" rows="6" required="" placeholder="Description of Art Gallery" aria-label="Art Gallery Description"><?= $about['artgallery_description']?></textarea>
                                </div>
                                <div class="" hidden>
                                    <label class="block text-sm text-gray-600" for="artgallery_image">Art Gallery Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="artgallery_image" name="artgallery_image" type="text" required="" placeholder="Art Gallery Image"  aria-label="Art Gallery Image" value="artgallery">
                                </div>
                                
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        
<?php include'footer.php'?>

