PGDMP         8    	            {         	   abdul_pmi    14.7 (Homebrew)    15.2                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16385 	   abdul_pmi    DATABASE     k   CREATE DATABASE abdul_pmi WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'C';
    DROP DATABASE abdul_pmi;
                postgres    false                        2615    2200    public    SCHEMA     2   -- *not* creating schema, since initdb creates it
 2   -- *not* dropping schema, since initdb creates it
                adityaekaputra    false                       0    0    SCHEMA public    ACL     Q   REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;
                   adityaekaputra    false    4            �            1259    16425    pasien    TABLE       CREATE TABLE public.pasien (
    id integer NOT NULL,
    nik character varying(11),
    nama character varying(255),
    email character varying(50),
    telp character varying(50),
    alamat character varying(255),
    password character varying(255)
);
    DROP TABLE public.pasien;
       public         heap    postgres    false    4            �            1259    16424    pasien_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pasien_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.pasien_id_seq;
       public          postgres    false    4    210                       0    0    pasien_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pasien_id_seq OWNED BY public.pasien.id;
          public          postgres    false    209            |           2604    16428 	   pasien id    DEFAULT     f   ALTER TABLE ONLY public.pasien ALTER COLUMN id SET DEFAULT nextval('public.pasien_id_seq'::regclass);
 8   ALTER TABLE public.pasien ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210                      0    16425    pasien 
   TABLE DATA           N   COPY public.pasien (id, nik, nama, email, telp, alamat, password) FROM stdin;
    public          postgres    false    210   �                  0    0    pasien_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.pasien_id_seq', 2, true);
          public          postgres    false    209            ~           2606    16432    pasien pasien_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.pasien
    ADD CONSTRAINT pasien_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.pasien DROP CONSTRAINT pasien_pkey;
       public            postgres    false    210               �   x�%�A�0 ���+v�<�[v+a���	�e����2�||��Y �Lg�_�~0�)[?0HP�����>�`#�mG�%��y�,RK�a2>���,�#M�n��gMuI�r�Ks����uJ�-ĲHAו�W�9��;'X     