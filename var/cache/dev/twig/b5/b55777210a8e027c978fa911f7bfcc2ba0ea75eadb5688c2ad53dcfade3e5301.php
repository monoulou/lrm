<?php

/* MALrmBundle:Client:index.html.twig */
class __TwigTemplate_1f2798dab0ad12eee7b6b415cfa34c170366746d8154dcb946cfeb7d66dd170e extends Twig_Template
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
        $__internal_f0578eede80bfb64792c9f0596dc508d92d0449d8c85561aca76a90a9dcd906f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0578eede80bfb64792c9f0596dc508d92d0449d8c85561aca76a90a9dcd906f->enter($__internal_f0578eede80bfb64792c9f0596dc508d92d0449d8c85561aca76a90a9dcd906f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $__internal_bd5becb55e46388234f213e81f8a56f4201f861705c25bd48d90baeddce06426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5becb55e46388234f213e81f8a56f4201f861705c25bd48d90baeddce06426->enter($__internal_bd5becb55e46388234f213e81f8a56f4201f861705c25bd48d90baeddce06426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0578eede80bfb64792c9f0596dc508d92d0449d8c85561aca76a90a9dcd906f->leave($__internal_f0578eede80bfb64792c9f0596dc508d92d0449d8c85561aca76a90a9dcd906f_prof);

        
        $__internal_bd5becb55e46388234f213e81f8a56f4201f861705c25bd48d90baeddce06426->leave($__internal_bd5becb55e46388234f213e81f8a56f4201f861705c25bd48d90baeddce06426_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fa501593ab94565a00ccd04156748d37951225d802c1323587901c2fdcc02a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa501593ab94565a00ccd04156748d37951225d802c1323587901c2fdcc02a0->enter($__internal_3fa501593ab94565a00ccd04156748d37951225d802c1323587901c2fdcc02a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c9381a31f929cb3b4ec7893f0948b720bda88a466a7bd630adbfdad1760f4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9381a31f929cb3b4ec7893f0948b720bda88a466a7bd630adbfdad1760f4ae->enter($__internal_5c9381a31f929cb3b4ec7893f0948b720bda88a466a7bd630adbfdad1760f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_5c9381a31f929cb3b4ec7893f0948b720bda88a466a7bd630adbfdad1760f4ae->leave($__internal_5c9381a31f929cb3b4ec7893f0948b720bda88a466a7bd630adbfdad1760f4ae_prof);

        
        $__internal_3fa501593ab94565a00ccd04156748d37951225d802c1323587901c2fdcc02a0->leave($__internal_3fa501593ab94565a00ccd04156748d37951225d802c1323587901c2fdcc02a0_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5920e46752b91f14fe49f5e6a4b6864dcb9e8c09e8d4030bd5df131f9a6070c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5920e46752b91f14fe49f5e6a4b6864dcb9e8c09e8d4030bd5df131f9a6070c8->enter($__internal_5920e46752b91f14fe49f5e6a4b6864dcb9e8c09e8d4030bd5df131f9a6070c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de20a93c442c9a78b73472d1383051c2e7955e7ef25df55253d7c40eea0111e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de20a93c442c9a78b73472d1383051c2e7955e7ef25df55253d7c40eea0111e2->enter($__internal_de20a93c442c9a78b73472d1383051c2e7955e7ef25df55253d7c40eea0111e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_de20a93c442c9a78b73472d1383051c2e7955e7ef25df55253d7c40eea0111e2->leave($__internal_de20a93c442c9a78b73472d1383051c2e7955e7ef25df55253d7c40eea0111e2_prof);

        
        $__internal_5920e46752b91f14fe49f5e6a4b6864dcb9e8c09e8d4030bd5df131f9a6070c8->leave($__internal_5920e46752b91f14fe49f5e6a4b6864dcb9e8c09e8d4030bd5df131f9a6070c8_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04a74cfafa171b149b4413beb6470c9fdcb7479d47d680acf9358dabd6f5a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04a74cfafa171b149b4413beb6470c9fdcb7479d47d680acf9358dabd6f5a25->enter($__internal_c04a74cfafa171b149b4413beb6470c9fdcb7479d47d680acf9358dabd6f5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c85932963e076c0fbf00abfc8db13772a7d0b8b784fc29b8297d609bfb429dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c85932963e076c0fbf00abfc8db13772a7d0b8b784fc29b8297d609bfb429dc->enter($__internal_5c85932963e076c0fbf00abfc8db13772a7d0b8b784fc29b8297d609bfb429dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
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
            echo "                    ";
            if (($this->getAttribute($context["client"], "id", array()) != "13")) {
                // line 83
                echo "                        <tr>
                            <td><a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
                echo "</td>
                            ";
                // line 90
                if (($this->getAttribute($context["client"], "typeClient", array()) == "Prospect")) {
                    // line 91
                    echo "                                <td> -- </td>
                                ";
                } else {
                    // line 93
                    echo "                                    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 95
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
                echo "</td>
                            <td style=\"text-align: right\"><a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\">mode_edit</i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>

                    ";
            }
            // line 100
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_5c85932963e076c0fbf00abfc8db13772a7d0b8b784fc29b8297d609bfb429dc->leave($__internal_5c85932963e076c0fbf00abfc8db13772a7d0b8b784fc29b8297d609bfb429dc_prof);

        
        $__internal_c04a74cfafa171b149b4413beb6470c9fdcb7479d47d680acf9358dabd6f5a25->leave($__internal_c04a74cfafa171b149b4413beb6470c9fdcb7479d47d680acf9358dabd6f5a25_prof);

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
        return array (  273 => 101,  267 => 100,  258 => 96,  253 => 95,  247 => 93,  243 => 91,  241 => 90,  237 => 89,  233 => 88,  229 => 87,  225 => 86,  217 => 85,  211 => 84,  208 => 83,  205 => 82,  201 => 81,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
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
                    {% if client.id != '13' %}
                        <tr>
                            <td><a href=\"{{ path('ma_lrm_client_show', { 'id': client.id }) }}\">{{ client.denomination }}</a></td>
                            <td>{{ client.adresse }}-{{ client.villeCodePostal }} {{ client.ville }}</td>
                            <td>{{ client.nomContact }}</td>
                            <td>{{ client.fonctionContact }}</td>
                            <td>{{ client.telephone }}</td>
                            <td>{{ client.typeClient }}</td>
                            {% if client.typeClient == 'Prospect' %}
                                <td> -- </td>
                                {% else %}
                                    <td>{{ client.partenaire }}</td>
                            {% endif %}
                            <td>{{ client.etat }}</td>
                            <td style=\"text-align: right\"><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\"><i class=\"material-icons\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_client_delete', { 'id': client.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>

                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Client:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/index.html.twig");
    }
}
