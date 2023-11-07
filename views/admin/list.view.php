<?php include'header.php'?>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Tables</h1>

                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Table Example
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Sub Title</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Edit</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Delete</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach ($list as $data): ?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4"><?=$data['title']?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?=$data['subtitle']?></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="#"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        
<?php include'footer.php'?>
