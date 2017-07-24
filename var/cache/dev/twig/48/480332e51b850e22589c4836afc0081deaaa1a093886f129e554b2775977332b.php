<?php

/* MALrmBundle:Client:index.html.twig */
class __TwigTemplate_c1722603f36a1ff6973274dbc2c48798298625e4d69ea82a5893744fe2738909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d90a7fe6bfddf1959a2190b5c591b0fcd292e4a580a8d6a47241178dc96d881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d90a7fe6bfddf1959a2190b5c591b0fcd292e4a580a8d6a47241178dc96d881->enter($__internal_6d90a7fe6bfddf1959a2190b5c591b0fcd292e4a580a8d6a47241178dc96d881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $__internal_211aab41d06709b084e203af91c8e3a397b5e1ae8ac2b1d77be61b2557ed3d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211aab41d06709b084e203af91c8e3a397b5e1ae8ac2b1d77be61b2557ed3d60->enter($__internal_211aab41d06709b084e203af91c8e3a397b5e1ae8ac2b1d77be61b2557ed3d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d90a7fe6bfddf1959a2190b5c591b0fcd292e4a580a8d6a47241178dc96d881->leave($__internal_6d90a7fe6bfddf1959a2190b5c591b0fcd292e4a580a8d6a47241178dc96d881_prof);

        
        $__internal_211aab41d06709b084e203af91c8e3a397b5e1ae8ac2b1d77be61b2557ed3d60->leave($__internal_211aab41d06709b084e203af91c8e3a397b5e1ae8ac2b1d77be61b2557ed3d60_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a5dc2457c4b3b70bbeec14fc30ab54bd3ba65ef46ce8c174be555337478def3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5dc2457c4b3b70bbeec14fc30ab54bd3ba65ef46ce8c174be555337478def3->enter($__internal_2a5dc2457c4b3b70bbeec14fc30ab54bd3ba65ef46ce8c174be555337478def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4cbe6d031d59540dd58f15b009c14406c2c3151b3356b3b3171cbd5454f194d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbe6d031d59540dd58f15b009c14406c2c3151b3356b3b3171cbd5454f194d1->enter($__internal_4cbe6d031d59540dd58f15b009c14406c2c3151b3356b3b3171cbd5454f194d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_4cbe6d031d59540dd58f15b009c14406c2c3151b3356b3b3171cbd5454f194d1->leave($__internal_4cbe6d031d59540dd58f15b009c14406c2c3151b3356b3b3171cbd5454f194d1_prof);

        
        $__internal_2a5dc2457c4b3b70bbeec14fc30ab54bd3ba65ef46ce8c174be555337478def3->leave($__internal_2a5dc2457c4b3b70bbeec14fc30ab54bd3ba65ef46ce8c174be555337478def3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30963b5bdc106d1172c080ad9f599ef443870cbf2506a7483079a376bb25c9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30963b5bdc106d1172c080ad9f599ef443870cbf2506a7483079a376bb25c9c2->enter($__internal_30963b5bdc106d1172c080ad9f599ef443870cbf2506a7483079a376bb25c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_420ad278585777148feeffd4d0e0efcd15a84cc268cdc81886150b65c4a79816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420ad278585777148feeffd4d0e0efcd15a84cc268cdc81886150b65c4a79816->enter($__internal_420ad278585777148feeffd4d0e0efcd15a84cc268cdc81886150b65c4a79816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_420ad278585777148feeffd4d0e0efcd15a84cc268cdc81886150b65c4a79816->leave($__internal_420ad278585777148feeffd4d0e0efcd15a84cc268cdc81886150b65c4a79816_prof);

        
        $__internal_30963b5bdc106d1172c080ad9f599ef443870cbf2506a7483079a376bb25c9c2->leave($__internal_30963b5bdc106d1172c080ad9f599ef443870cbf2506a7483079a376bb25c9c2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3742360831c27606f9143f3e8940f11c3c6692207fca3ca25295b59f46461f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3742360831c27606f9143f3e8940f11c3c6692207fca3ca25295b59f46461f6->enter($__internal_b3742360831c27606f9143f3e8940f11c3c6692207fca3ca25295b59f46461f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73c5551259ca81c9c462144b2aa2a601eab8b24b60f83e2a6d4b205ec6cb9f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c5551259ca81c9c462144b2aa2a601eab8b24b60f83e2a6d4b205ec6cb9f4e->enter($__internal_73c5551259ca81c9c462144b2aa2a601eab8b24b60f83e2a6d4b205ec6cb9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 82
            echo "                    <tr>
                        <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
            echo "</td>
                        ";
            // line 89
            if (twig_test_empty($this->getAttribute($context["client"], "partenaire", array()))) {
                // line 90
                echo "                            <td> -- </td>
                        ";
            } else {
                // line 92
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 94
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_73c5551259ca81c9c462144b2aa2a601eab8b24b60f83e2a6d4b205ec6cb9f4e->leave($__internal_73c5551259ca81c9c462144b2aa2a601eab8b24b60f83e2a6d4b205ec6cb9f4e_prof);

        
        $__internal_b3742360831c27606f9143f3e8940f11c3c6692207fca3ca25295b59f46461f6->leave($__internal_b3742360831c27606f9143f3e8940f11c3c6692207fca3ca25295b59f46461f6_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 98,  255 => 95,  250 => 94,  244 => 92,  240 => 90,  238 => 89,  234 => 88,  230 => 87,  226 => 86,  222 => 85,  214 => 84,  208 => 83,  205 => 82,  201 => 81,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}


    {% block javascripts %}
        <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
    {% endblock %}



{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for client in clients %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_client_show', { 'id': client.id }) }}\">{{ client.denomination }}</a></td>
                        <td>{{ client.adresse }}-{{ client.villeCodePostal }} {{ client.ville }}</td>
                        <td>{{ client.nomContact }}</td>
                        <td>{{ client.fonctionContact }}</td>
                        <td>{{ client.telephone }}</td>
                        <td>{{ client.typeClient }}</td>
                        {% if client.partenaire is empty %}
                            <td> -- </td>
                        {% else %}
                            <td>{{ client.partenaire }}</td>
                        {% endif %}
                        <td>{{ client.etat }}</td>
                        <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\">Modifier</a></td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Client:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\index.html.twig");
    }
}
