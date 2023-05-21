<?php 

$folderPath = RESOURCEPATH . "/student/phpShop"; 
$files = scandir($folderPath);

usort($files, function($a, $b) {
    preg_match('/\[(\d+)\]/', $a, $aMatches);
    preg_match('/\[(\d+)\]/', $b, $bMatches);
    $aIndex = isset($aMatches[1]) ? intval($aMatches[1]) : 0;
    $bIndex = isset($bMatches[1]) ? intval($bMatches[1]) : 0;
    return $aIndex - $bIndex;
});
$hasValidFiles = false;
foreach ($files as $file) {
    if (preg_match('/\[(\d+)\]([^]]+)/', $file, $matches)) {
        $hasValidFiles = true;
        break;
    }
}
if ($hasValidFiles) {
    ?>
        <section>
            <div class="container mt-3 add-shadow">
            <div class="d-flex justify-content-center">
                <div id="carouselpsIndicators" class="carousel slide carousel-fade max-images-size" data-bs-ride="carouselps">
                    <div class="carousel-indicators">
                        <?php
                        $index = 0;
                        foreach ($files as $file) {
                            if (preg_match('/\[(\d+)\]([^]]+)/', $file, $matches)) {
                                echo '<button type="button" data-bs-target="#carouselpsIndicators" data-bs-slide-to="' . $index . '"';
                                if ($index === 0) {
                                    echo ' class="active" aria-current="true"';
                                }
                                echo ' aria-label="Slide ' . ($index + 1) . '"></button>';
                                $index++;
                            }
                        }
                        ?>
                    </div>
                    <div class="carousel-inner w-100">
                        <?php
                        $activeClass = 'active';
                        foreach ($files as $file) {
                            if (preg_match('/\[(\d+)\]([^]]+)/', $file, $matches)) {
                        ?>
                                <div class="carousel-item <?= $activeClass ?>">
                                    <img src="<?= APPPATH ?>/resources/student/phpShop/<?= $file ?>" alt="..." class="w-100">
                                </div>
                        <?php
                                $activeClass = '';
                            }
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselpsIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselpsIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            </div>
        </section>
    <?php } ?>