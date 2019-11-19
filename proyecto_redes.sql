--
-- PostgreSQL database dump
--

-- Dumped from database version 10.9 (Ubuntu 10.9-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.9 (Ubuntu 10.9-0ubuntu0.18.04.1)

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

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: contactos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contactos (
    identificacion character varying(20) NOT NULL,
    nombre character varying(40) NOT NULL,
    apellido character varying(40) NOT NULL,
    genero character varying(40) NOT NULL,
    tipo_id character varying(10) NOT NULL,
    telefono character varying(20) NOT NULL,
    direccion character varying(200) NOT NULL,
    correo character varying(200) NOT NULL
);


ALTER TABLE public.contactos OWNER TO postgres;

--
-- Data for Name: contactos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.contactos VALUES ('1098879546', 'Ana', 'Solano', 'Femenino', 'C.C.', '3125635698', 'Cra 25 # 16-50', 'anasolano85@gmail.com');
INSERT INTO public.contactos VALUES ('1098123485', 'Nayibe', 'Monsalve', 'Femenino', 'C.C.', '3168652678', 'Cra 68 # 11-50', 'nayibemon@gmail.com');
INSERT INTO public.contactos VALUES ('1098975462', 'Aura', 'Vesga', 'Femenino', 'C.C.', '3005632645', 'Cra 56 # 15-50', 'auravesga12@gmail.com');
INSERT INTO public.contactos VALUES ('1098811493', 'Carlos', 'Alberto', 'Masculino', 'C.C', '3125637522', 'Cra', 'carlosapalpo@hotmail.com');


--
-- Name: contactos contactos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contactos
    ADD CONSTRAINT contactos_pkey PRIMARY KEY (identificacion);


--
-- PostgreSQL database dump complete
--

