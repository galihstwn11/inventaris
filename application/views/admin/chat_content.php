<?php
// Pastikan session dimulai
session_start();

// Ambil data chat dari database
// Sesuaikan dengan struktur database Anda
?>

<ul class="chat-list">
    <?php for ($i = 0; $i < $jumlah; $i++) { ?>
        <li class="<?= ($chat[$i]->id_user == $_SESSION['identitas']) ? 'odd' : ''; ?> chat-item">
            <?php if ($chat[$i]->id_user != $_SESSION['identitas']): ?>
                <div class="chat-img"><img src="<?= base_url(); ?>assets/images/users/1.jpg" alt="user"></div>
            <?php endif; ?>
            
            <div class="chat-content">
                <?php if ($chat[$i]->id_user != $_SESSION['identitas']): ?>
                    <h6 class="font-medium"><?= $chat[$i]->nama ?></h6>
                <?php endif; ?>
                <div class="box bg-light-info"><?= $chat[$i]->pesan ?></div>
            </div>
            <div class="chat-time"><?= $chat[$i]->waktu ?></div>
        </li>
    <?php } ?>
</ul>
