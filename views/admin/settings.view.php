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
                <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

                <div class="flex flex-wrap">
                    <div class="w-full my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Settings Form
                        </p>
                        <div class="leading-loose">
                            <form method="POST" action="" class="p-10 bg-white rounded shadow-xl">
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="website_name">Website Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="website_name" name="website_name" type="text" required="" placeholder="Website Name" aria-label="Website Name" value="<?= $settings['website_name'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="contact_email">Contact Email</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="contact_email" name="contact_email" type="text" required="" placeholder="Contact Email" aria-label="Contact Email" value="<?= $settings['contact_email'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="contact_phone">Contact Phone</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="contact_phone" name="contact_phone" type="text" required="" placeholder="Contact Phone" aria-label="Contact Phone" value="<?= $settings['contact_phone'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="contact_address">Contact Address</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="contact_address" name="contact_address" type="text" required="" placeholder="Contact Address" aria-label="Contact Address" value="<?= $settings['contact_address'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="social_gmail">Social Gmail</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="social_gmail" name="social_gmail" type="text" required="" placeholder="Social Gmail" aria-label="Social Gmail" value="<?= $settings['social_gmail'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="social_youtube">Social Youtube</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="social_youtube" name="social_youtube" type="text" required="" placeholder="Social Youtube" aria-label="Social Youtube" value="<?= $settings['social_youtube'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="social_twitter">Social Twitter</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="social_twitter" name="social_twitter" type="text" required="" placeholder="Social Twitter" aria-label="Social Gmail" value="<?= $settings['social_gmail'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="social_facebook">Social Facebook</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="social_facebook" name="social_facebook" type="text" required="" placeholder="Social Facebook" aria-label="Social Facebook" value="<?= $settings['social_facebook'] ?>">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="footer_note">Footer Note</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="footer_note" name="footer_note" type="text" required="" placeholder="Footer Note" aria-label="Footer Note" value="<?= $settings['footer_note'] ?>">
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