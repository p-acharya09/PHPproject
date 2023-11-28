<?php
    session_start();
    
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true){
    header('Location:/login');
    exit;
}
?>
<?php include'header.php'?>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Edit Media</h1>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Media Form
                        </p>
                        <div class="leading-loose">
                            <form action="" method="PUT" class="p-10 bg-white rounded shadow-xl" enctype="multipart/form-data">
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="title">Title</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Title" aria-label="Title" value="<?= $list['title'] ?>">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="subtitle">Sub Title</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="subtitle" name="subtitle" type="text" required="" placeholder="Subtitle" aria-label="Subtitle" value="<?= $list['subtitle'] ?>">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" placeholder="Image" aria-label="Image">
                                    <img title="<?= $list['title'] ?>" src="../../<?=$list['images']?>">
                                </div>
                                <div class="mt-2" hidden>
                                    <label class="block text-sm text-gray-600" for="image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="images" name="images" type="text" aria-label="Image" value="<?= $list['images'] ?>">
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
