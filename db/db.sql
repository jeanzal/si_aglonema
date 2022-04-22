create table data_tanaman (
    id_tanaman int not null auto_increment primary key,
    id_jenis int,
    ciri_khas text,
    CONSTRAINT id_barang FOREIGN KEY (`id_jenis`) REFERENCES `jenis_aglonema` (`id_jenis`)
);