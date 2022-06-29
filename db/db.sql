create table data_tanaman (
    id_tanaman int not null auto_increment primary key,
    id_jenis int,
    ciri_khas text,
    CONSTRAINT id_jenis FOREIGN KEY (`id_jenis`) REFERENCES `jenis_aglonema` (`id_jenis`)
);

create table data_obat (
    id_obat int not null auto_increment primary key,
    jenis_obat int,
    kegunaan text,
    
);

create table jenis_gejala (
    id_gejala int not null auto_increment primary key,
    id_penyakit int,
    id_obat int,
    karakteristik_gejala text,
    CONSTRAINT id_penyakit FOREIGN KEY (`id_penyakit`) REFERENCES `jenis_penyakit` (`id_penyakit`),
    CONSTRAINT id_obat FOREIGN KEY (`id_obat`) REFERENCES `data_obat` (`id_obat`)
);

