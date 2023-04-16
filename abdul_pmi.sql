--
-- PostgreSQL database dump
--

-- Dumped from database version 14.7 (Homebrew)
-- Dumped by pg_dump version 14.7 (Homebrew)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: pasien; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pasien (
    id integer NOT NULL,
    nik character varying(11),
    nama character varying(255),
    email character varying(50),
    telp character varying(50),
    alamat character varying(255),
    password character varying(255)
);


ALTER TABLE public.pasien OWNER TO postgres;

--
-- Name: pasien_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pasien_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pasien_id_seq OWNER TO postgres;

--
-- Name: pasien_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pasien_id_seq OWNED BY public.pasien.id;


--
-- Name: pasien id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pasien ALTER COLUMN id SET DEFAULT nextval('public.pasien_id_seq'::regclass);


--
-- Data for Name: pasien; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pasien (id, nik, nama, email, telp, alamat, password) FROM stdin;
2	NIK0001	adit	adit@gmail.com	08123123123	bogor raya residence 1 no 1	$2y$10$18ph0ReMV.xSetxEWKfu9eUNeiRnHZWOGEp1UIqTB5A05.MB0EUR2
3	NIK0002	asep	asep@gmail.com	081231222	alamat asep	$2y$10$vGftNpLajxyz6OmXn4mwtONc.yVjcZ9KIIVCANP4yTTaNUzG3bFfW
\.


--
-- Name: pasien_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pasien_id_seq', 3, true);


--
-- Name: pasien pasien_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pasien
    ADD CONSTRAINT pasien_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

