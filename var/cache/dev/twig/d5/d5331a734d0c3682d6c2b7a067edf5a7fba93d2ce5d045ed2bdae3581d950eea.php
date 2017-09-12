<?php

/* MALrmBundle:Emploi:index.html.twig */
class __TwigTemplate_afd873a04fabff9db31f43a0cb15f489365b3210454df2b69cc3fd8b3c3e393b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Emploi:index.html.twig", 1);
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
        $__internal_b0f048a8d0d3656fdd5a18ced44c72e0d92fad1c88902f4e643f7b9372d2c9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f048a8d0d3656fdd5a18ced44c72e0d92fad1c88902f4e643f7b9372d2c9a9->enter($__internal_b0f048a8d0d3656fdd5a18ced44c72e0d92fad1c88902f4e643f7b9372d2c9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $__internal_f5548396164cfb721cd9c0f8aeb93cd4ab52fa6b4400f645c48f7b9a27914881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5548396164cfb721cd9c0f8aeb93cd4ab52fa6b4400f645c48f7b9a27914881->enter($__internal_f5548396164cfb721cd9c0f8aeb93cd4ab52fa6b4400f645c48f7b9a27914881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f048a8d0d3656fdd5a18ced44c72e0d92fad1c88902f4e643f7b9372d2c9a9->leave($__internal_b0f048a8d0d3656fdd5a18ced44c72e0d92fad1c88902f4e643f7b9372d2c9a9_prof);

        
        $__internal_f5548396164cfb721cd9c0f8aeb93cd4ab52fa6b4400f645c48f7b9a27914881->leave($__internal_f5548396164cfb721cd9c0f8aeb93cd4ab52fa6b4400f645c48f7b9a27914881_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a54cb03b608e625f7dd8ce6359022e067c2663f38dc1edcee7b21ee21f064912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54cb03b608e625f7dd8ce6359022e067c2663f38dc1edcee7b21ee21f064912->enter($__internal_a54cb03b608e625f7dd8ce6359022e067c2663f38dc1edcee7b21ee21f064912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_53269887c1dfaff72ee7e994b4f258fa69663616766171eeb2db1ddc4fea75c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53269887c1dfaff72ee7e994b4f258fa69663616766171eeb2db1ddc4fea75c3->enter($__internal_53269887c1dfaff72ee7e994b4f258fa69663616766171eeb2db1ddc4fea75c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_53269887c1dfaff72ee7e994b4f258fa69663616766171eeb2db1ddc4fea75c3->leave($__internal_53269887c1dfaff72ee7e994b4f258fa69663616766171eeb2db1ddc4fea75c3_prof);

        
        $__internal_a54cb03b608e625f7dd8ce6359022e067c2663f38dc1edcee7b21ee21f064912->leave($__internal_a54cb03b608e625f7dd8ce6359022e067c2663f38dc1edcee7b21ee21f064912_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_012c61e56075326d04d423f7ba4190ce78c8744c77605b020eba53fdeecc74a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012c61e56075326d04d423f7ba4190ce78c8744c77605b020eba53fdeecc74a6->enter($__internal_012c61e56075326d04d423f7ba4190ce78c8744c77605b020eba53fdeecc74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90da77958e2f0d74b616777b5f2951be2cdc6b11665327fa77f05208f3b84e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da77958e2f0d74b616777b5f2951be2cdc6b11665327fa77f05208f3b84e91->enter($__internal_90da77958e2f0d74b616777b5f2951be2cdc6b11665327fa77f05208f3b84e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_90da77958e2f0d74b616777b5f2951be2cdc6b11665327fa77f05208f3b84e91->leave($__internal_90da77958e2f0d74b616777b5f2951be2cdc6b11665327fa77f05208f3b84e91_prof);

        
        $__internal_012c61e56075326d04d423f7ba4190ce78c8744c77605b020eba53fdeecc74a6->leave($__internal_012c61e56075326d04d423f7ba4190ce78c8744c77605b020eba53fdeecc74a6_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d087114cfe734530df9b3662e5a03c6d883d2361a513fe94663a96aec5ac6e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d087114cfe734530df9b3662e5a03c6d883d2361a513fe94663a96aec5ac6e37->enter($__internal_d087114cfe734530df9b3662e5a03c6d883d2361a513fe94663a96aec5ac6e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09ed8431285da0054445d84d823eca0e610eb5c6cc4d6fb9483a3499b184c943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ed8431285da0054445d84d823eca0e610eb5c6cc4d6fb9483a3499b184c943->enter($__internal_09ed8431285da0054445d84d823eca0e610eb5c6cc4d6fb9483a3499b184c943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:index.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:index.html.twig", 33)->display($context);
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
                    <th>Utilisateur</th>
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
                    <th>Utilisateur</th>
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emplois"]) ? $context["emplois"] : $this->getContext($context, "emplois")));
        foreach ($context['_seq'] as $context["_key"] => $context["emploi"]) {
            // line 79
            echo "                    ";
            if (($this->getAttribute($context["emploi"], "id", array()) != "16")) {
                // line 80
                echo "                        <tr>
                            <td><a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_show", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "intitule", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "chargeRecrutement", array()), "username", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "denomination", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "contrat", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeCodePostal", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeActivite", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "nombrePoste", array()), "html", null, true);
                echo "</td>
                            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["siteParution"]) ? $context["siteParution"] : $this->getContext($context, "siteParution")));
                foreach ($context['_seq'] as $context["index"] => $context["site"]) {
                    // line 88
                    echo "                                ";
                    if (($context["index"] == $this->getAttribute($context["emploi"], "id", array()))) {
                        // line 89
                        echo "                                    <td>";
                        echo twig_escape_filter($this->env, $context["site"], "html", null, true);
                        echo "</td>
                                ";
                    }
                    // line 91
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            <td style=\"text-align: center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_edit", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_delete", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>
                    ";
            }
            // line 95
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emploi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_09ed8431285da0054445d84d823eca0e610eb5c6cc4d6fb9483a3499b184c943->leave($__internal_09ed8431285da0054445d84d823eca0e610eb5c6cc4d6fb9483a3499b184c943_prof);

        
        $__internal_d087114cfe734530df9b3662e5a03c6d883d2361a513fe94663a96aec5ac6e37->leave($__internal_d087114cfe734530df9b3662e5a03c6d883d2361a513fe94663a96aec5ac6e37_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Emploi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 96,  265 => 95,  256 => 92,  250 => 91,  244 => 89,  241 => 88,  237 => 87,  233 => 86,  227 => 85,  223 => 84,  219 => 83,  215 => 82,  209 => 81,  206 => 80,  203 => 79,  199 => 78,  169 => 50,  160 => 47,  156 => 45,  152 => 44,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                    <th>Utilisateur</th>
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
                    <th>Utilisateur</th>
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
                            <td>{{ emploi.client.chargeRecrutement.username}}</td>
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



{% endblock %}", "MALrmBundle:Emploi:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Emploi/index.html.twig");
    }
}
