<?php

/* @MALrm/Emploi/index.html.twig */
class __TwigTemplate_b9f682d046169441aeb4ef6446ac71dd20756342de4e0515caf80f92c2aec01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Emploi/index.html.twig", 1);
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
        $__internal_5797fd17c55f2c60a5d04198d0be673bf17fcf2c7da79388cc15a56a10d93841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5797fd17c55f2c60a5d04198d0be673bf17fcf2c7da79388cc15a56a10d93841->enter($__internal_5797fd17c55f2c60a5d04198d0be673bf17fcf2c7da79388cc15a56a10d93841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/index.html.twig"));

        $__internal_e794f6b5ab6b4d3a2b8b498a6385de397f3f4076d202aa6c4c2dcce30cb02f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e794f6b5ab6b4d3a2b8b498a6385de397f3f4076d202aa6c4c2dcce30cb02f11->enter($__internal_e794f6b5ab6b4d3a2b8b498a6385de397f3f4076d202aa6c4c2dcce30cb02f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5797fd17c55f2c60a5d04198d0be673bf17fcf2c7da79388cc15a56a10d93841->leave($__internal_5797fd17c55f2c60a5d04198d0be673bf17fcf2c7da79388cc15a56a10d93841_prof);

        
        $__internal_e794f6b5ab6b4d3a2b8b498a6385de397f3f4076d202aa6c4c2dcce30cb02f11->leave($__internal_e794f6b5ab6b4d3a2b8b498a6385de397f3f4076d202aa6c4c2dcce30cb02f11_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97c7969e093f89b51f764f6a25fec0f9e3f495b83c8b28b2065afaff17e176c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c7969e093f89b51f764f6a25fec0f9e3f495b83c8b28b2065afaff17e176c4->enter($__internal_97c7969e093f89b51f764f6a25fec0f9e3f495b83c8b28b2065afaff17e176c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7877efd1adc2df2c12722aa94c45e8e507634ecdfded4381124ce8b623406ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7877efd1adc2df2c12722aa94c45e8e507634ecdfded4381124ce8b623406ca6->enter($__internal_7877efd1adc2df2c12722aa94c45e8e507634ecdfded4381124ce8b623406ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_7877efd1adc2df2c12722aa94c45e8e507634ecdfded4381124ce8b623406ca6->leave($__internal_7877efd1adc2df2c12722aa94c45e8e507634ecdfded4381124ce8b623406ca6_prof);

        
        $__internal_97c7969e093f89b51f764f6a25fec0f9e3f495b83c8b28b2065afaff17e176c4->leave($__internal_97c7969e093f89b51f764f6a25fec0f9e3f495b83c8b28b2065afaff17e176c4_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b06063aa8c8556018d50d27858e04a4c426bd3e9587bf68fdd5edf4320d0a2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06063aa8c8556018d50d27858e04a4c426bd3e9587bf68fdd5edf4320d0a2c8->enter($__internal_b06063aa8c8556018d50d27858e04a4c426bd3e9587bf68fdd5edf4320d0a2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2aecf4f300c568d89f245803d99660877afc0b52b0b1a6391c77d78e838938f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2aecf4f300c568d89f245803d99660877afc0b52b0b1a6391c77d78e838938f->enter($__internal_d2aecf4f300c568d89f245803d99660877afc0b52b0b1a6391c77d78e838938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_d2aecf4f300c568d89f245803d99660877afc0b52b0b1a6391c77d78e838938f->leave($__internal_d2aecf4f300c568d89f245803d99660877afc0b52b0b1a6391c77d78e838938f_prof);

        
        $__internal_b06063aa8c8556018d50d27858e04a4c426bd3e9587bf68fdd5edf4320d0a2c8->leave($__internal_b06063aa8c8556018d50d27858e04a4c426bd3e9587bf68fdd5edf4320d0a2c8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba94d86f9c89d109a45b1c6e027cfd21d2daf9cc61c337c502539e6364705b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba94d86f9c89d109a45b1c6e027cfd21d2daf9cc61c337c502539e6364705b5->enter($__internal_aba94d86f9c89d109a45b1c6e027cfd21d2daf9cc61c337c502539e6364705b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c990c8dcbeac6ef2a9fa5d265848bc8106ce51dd0766f02f30e7d73be041ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c990c8dcbeac6ef2a9fa5d265848bc8106ce51dd0766f02f30e7d73be041ebe->enter($__internal_3c990c8dcbeac6ef2a9fa5d265848bc8106ce51dd0766f02f30e7d73be041ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 30
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/index.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/index.html.twig", 33)->display($context);
        // line 34
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES:</h5>
        </div>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de postes</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de poste</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emplois"]) ? $context["emplois"] : $this->getContext($context, "emplois")));
        foreach ($context['_seq'] as $context["_key"] => $context["emploi"]) {
            // line 77
            echo "                    ";
            if (($this->getAttribute($context["emploi"], "id", array()) != "16")) {
                // line 78
                echo "                        <tr>
                            <td><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_show", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "intitule", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "denomination", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "contrat", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeCodePostal", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeActivite", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "nombrePoste", array()), "html", null, true);
                echo "</td>
                            ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["siteParution"]) ? $context["siteParution"] : $this->getContext($context, "siteParution")));
                foreach ($context['_seq'] as $context["index"] => $context["site"]) {
                    // line 85
                    echo "                                ";
                    if (($context["index"] == $this->getAttribute($context["emploi"], "id", array()))) {
                        // line 86
                        echo "                                    <td>";
                        echo twig_escape_filter($this->env, $context["site"], "html", null, true);
                        echo "</td>
                                ";
                    }
                    // line 88
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                            <td style=\"text-align: center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_edit", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_delete", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>
                    ";
            }
            // line 92
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emploi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_3c990c8dcbeac6ef2a9fa5d265848bc8106ce51dd0766f02f30e7d73be041ebe->leave($__internal_3c990c8dcbeac6ef2a9fa5d265848bc8106ce51dd0766f02f30e7d73be041ebe_prof);

        
        $__internal_aba94d86f9c89d109a45b1c6e027cfd21d2daf9cc61c337c502539e6364705b5->leave($__internal_aba94d86f9c89d109a45b1c6e027cfd21d2daf9cc61c337c502539e6364705b5_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Emploi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 93,  259 => 92,  250 => 89,  244 => 88,  238 => 86,  235 => 85,  231 => 84,  227 => 83,  221 => 82,  217 => 81,  213 => 80,  207 => 79,  204 => 78,  201 => 77,  197 => 76,  169 => 50,  160 => 47,  156 => 45,  152 => 44,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>LISTE DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de postes</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de poste</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for emploi in emplois %}
                    {% if emploi.id != '16' %}
                        <tr>
                            <td><a href=\"{{ path('ma_lrm_emploi_show', { 'id': emploi.id }) }}\">{{ emploi.intitule }}</a></td>
                            <td>{{ emploi.client.denomination }}</td>
                            <td>{{ emploi.contrat }}</td>
                            <td>{{ emploi.villeCodePostal }} - {{ emploi.villeActivite}}</td>
                            <td>{{ emploi.nombrePoste }}</td>
                            {% for index, site in siteParution %}
                                {% if index == emploi.id %}
                                    <td>{{ site }}</td>
                                {% endif %}
                            {% endfor %}
                            <td style=\"text-align: center\"><a href=\"{{ path ('ma_lrm_emploi_edit', { 'id': emploi.id }) }}\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_emploi_delete', { 'id': emploi.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>
                    {% endif %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}", "@MALrm/Emploi/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\index.html.twig");
    }
}
