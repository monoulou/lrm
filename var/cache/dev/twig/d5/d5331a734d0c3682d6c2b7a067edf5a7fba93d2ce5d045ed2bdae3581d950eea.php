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
        $__internal_0844219d6b93d2833a872d493423858077aa134bcd3c389224f0eac1a71efa14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0844219d6b93d2833a872d493423858077aa134bcd3c389224f0eac1a71efa14->enter($__internal_0844219d6b93d2833a872d493423858077aa134bcd3c389224f0eac1a71efa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $__internal_7136a013747bf1bbb261b0ba2df3d227ab7b915ba9f3e5ace62dc77bad66ecbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7136a013747bf1bbb261b0ba2df3d227ab7b915ba9f3e5ace62dc77bad66ecbc->enter($__internal_7136a013747bf1bbb261b0ba2df3d227ab7b915ba9f3e5ace62dc77bad66ecbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0844219d6b93d2833a872d493423858077aa134bcd3c389224f0eac1a71efa14->leave($__internal_0844219d6b93d2833a872d493423858077aa134bcd3c389224f0eac1a71efa14_prof);

        
        $__internal_7136a013747bf1bbb261b0ba2df3d227ab7b915ba9f3e5ace62dc77bad66ecbc->leave($__internal_7136a013747bf1bbb261b0ba2df3d227ab7b915ba9f3e5ace62dc77bad66ecbc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b260f73815ee6fd5b784c7803b131c42996a04f7dd011e08cb237f16556f699e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b260f73815ee6fd5b784c7803b131c42996a04f7dd011e08cb237f16556f699e->enter($__internal_b260f73815ee6fd5b784c7803b131c42996a04f7dd011e08cb237f16556f699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fccf2b5509553f526e5f121f647c92105ca8a5a39ffee7304916214dc8fbd7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccf2b5509553f526e5f121f647c92105ca8a5a39ffee7304916214dc8fbd7e2->enter($__internal_fccf2b5509553f526e5f121f647c92105ca8a5a39ffee7304916214dc8fbd7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_fccf2b5509553f526e5f121f647c92105ca8a5a39ffee7304916214dc8fbd7e2->leave($__internal_fccf2b5509553f526e5f121f647c92105ca8a5a39ffee7304916214dc8fbd7e2_prof);

        
        $__internal_b260f73815ee6fd5b784c7803b131c42996a04f7dd011e08cb237f16556f699e->leave($__internal_b260f73815ee6fd5b784c7803b131c42996a04f7dd011e08cb237f16556f699e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41801bba929b07aaf184aafae18dd95136f5afa3e2f4dd44755eaffa30e46c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41801bba929b07aaf184aafae18dd95136f5afa3e2f4dd44755eaffa30e46c82->enter($__internal_41801bba929b07aaf184aafae18dd95136f5afa3e2f4dd44755eaffa30e46c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eafd9ea5b1c8f92ad2bf16e8e59124c8c6e246286bd0462edf2e641eff70d144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd9ea5b1c8f92ad2bf16e8e59124c8c6e246286bd0462edf2e641eff70d144->enter($__internal_eafd9ea5b1c8f92ad2bf16e8e59124c8c6e246286bd0462edf2e641eff70d144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_eafd9ea5b1c8f92ad2bf16e8e59124c8c6e246286bd0462edf2e641eff70d144->leave($__internal_eafd9ea5b1c8f92ad2bf16e8e59124c8c6e246286bd0462edf2e641eff70d144_prof);

        
        $__internal_41801bba929b07aaf184aafae18dd95136f5afa3e2f4dd44755eaffa30e46c82->leave($__internal_41801bba929b07aaf184aafae18dd95136f5afa3e2f4dd44755eaffa30e46c82_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_75dbdbc9e10e53b1cdcc7679006025eaa12276bcfbc1c4b372305a013c88a4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75dbdbc9e10e53b1cdcc7679006025eaa12276bcfbc1c4b372305a013c88a4cc->enter($__internal_75dbdbc9e10e53b1cdcc7679006025eaa12276bcfbc1c4b372305a013c88a4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69fe9527cf3f8fd580856fac258385dae65017187836345c2addb22878fc7530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fe9527cf3f8fd580856fac258385dae65017187836345c2addb22878fc7530->enter($__internal_69fe9527cf3f8fd580856fac258385dae65017187836345c2addb22878fc7530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
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
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>

    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 32
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:index.html.twig", 32)->display($context);
        // line 33
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 35
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:index.html.twig", 35)->display($context);
        // line 36
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES</h5>
        </div>

        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 47
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo ".</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emplois"]) ? $context["emplois"] : $this->getContext($context, "emplois")));
        foreach ($context['_seq'] as $context["_key"] => $context["emploi"]) {
            // line 78
            echo "                    ";
            if (($this->getAttribute($context["emploi"], "id", array()) != "16")) {
                // line 79
                echo "                        <tr>
                            <td><a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_show", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "intitule", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "chargeRecrutement", array()), "username", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "denomination", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "contrat", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeCodePostal", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeActivite", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "nombrePoste", array()), "html", null, true);
                echo "</td>
                            ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["siteParution"]) ? $context["siteParution"] : $this->getContext($context, "siteParution")));
                foreach ($context['_seq'] as $context["index"] => $context["site"]) {
                    // line 87
                    echo "                                ";
                    if (($context["index"] == $this->getAttribute($context["emploi"], "id", array()))) {
                        // line 88
                        echo "                                    <td>";
                        echo twig_escape_filter($this->env, $context["site"], "html", null, true);
                        echo "</td>
                                ";
                    }
                    // line 90
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['site'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                            <td style=\"text-align: center\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_edit", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\" style=\"margin-left: 10px\">mode_edit</i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_delete", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";><i class=\"material-icons\">delete</i></a></td>
                        </tr>
                    ";
            }
            // line 94
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emploi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_69fe9527cf3f8fd580856fac258385dae65017187836345c2addb22878fc7530->leave($__internal_69fe9527cf3f8fd580856fac258385dae65017187836345c2addb22878fc7530_prof);

        
        $__internal_75dbdbc9e10e53b1cdcc7679006025eaa12276bcfbc1c4b372305a013c88a4cc->leave($__internal_75dbdbc9e10e53b1cdcc7679006025eaa12276bcfbc1c4b372305a013c88a4cc_prof);

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
        return array (  270 => 95,  264 => 94,  255 => 91,  249 => 90,  243 => 88,  240 => 87,  236 => 86,  232 => 85,  226 => 84,  222 => 83,  218 => 82,  214 => 81,  208 => 80,  205 => 79,  202 => 78,  198 => 77,  168 => 49,  159 => 47,  155 => 46,  143 => 36,  141 => 35,  137 => 33,  135 => 32,  126 => 26,  123 => 25,  117 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
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
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">{{ flash_message }}.</div>
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
                            <td style=\"text-align: center\"><a href=\"{{ path ('ma_lrm_emploi_edit', { 'id': emploi.id }) }}\"><i class=\"material-icons\" style=\"margin-left: 10px\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_emploi_delete', { 'id': emploi.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";><i class=\"material-icons\">delete</i></a></td>
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
