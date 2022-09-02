SELECT mhs_nama FROM tb_mahasiswa m
LEFT JOIN tb_mahasiswa_nilai mn ON mn.mhs_id = m.mhs_id
LEFT JOIN tb_matakuliah matkul ON matkul.mk_id = mn.mk_id WHERE matkul.mk_kode = "MK303" AND
mn.nilai = (
   SELECT max(nilai) FROM tb_mahasiswa_nilai mn LEFT JOIN tb_matakuliah matkul ON matkul.mk_id = mn.mk_id WHERE matkul.mk_kode = "MK303"
) order BY m.mhs_nama