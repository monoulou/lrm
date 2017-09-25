<?php

/* MALrmBundle:Candidat:index.html.twig */
class __TwigTemplate_4baf4a23b59f86c7d7876b0f3c9851475f03d0bb6e5021f363ab7b20d05ea0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:index.html.twig", 1);
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
        $__internal_f3bab487d99d39761e1e0588507ab59b9759ceff911e41e0adb61e34af4508cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bab487d99d39761e1e0588507ab59b9759ceff911e41e0adb61e34af4508cc->enter($__internal_f3bab487d99d39761e1e0588507ab59b9759ceff911e41e0adb61e34af4508cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $__internal_bb1e4afba63b11c166a293e9bace2635b37b67ab8d76d1d4690af14c7b6fee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1e4afba63b11c166a293e9bace2635b37b67ab8d76d1d4690af14c7b6fee4c->enter($__internal_bb1e4afba63b11c166a293e9bace2635b37b67ab8d76d1d4690af14c7b6fee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bab487d99d39761e1e0588507ab59b9759ceff911e41e0adb61e34af4508cc->leave($__internal_f3bab487d99d39761e1e0588507ab59b9759ceff911e41e0adb61e34af4508cc_prof);

        
        $__internal_bb1e4afba63b11c166a293e9bace2635b37b67ab8d76d1d4690af14c7b6fee4c->leave($__internal_bb1e4afba63b11c166a293e9bace2635b37b67ab8d76d1d4690af14c7b6fee4c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26c6d90edc23cd15959e9006c38d383cb3df08750caeec9c6bc2aee800013710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c6d90edc23cd15959e9006c38d383cb3df08750caeec9c6bc2aee800013710->enter($__internal_26c6d90edc23cd15959e9006c38d383cb3df08750caeec9c6bc2aee800013710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8df0752a50bf44e5e9c6401a1d73bc381a4971b39845971247162d728528a970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df0752a50bf44e5e9c6401a1d73bc381a4971b39845971247162d728528a970->enter($__internal_8df0752a50bf44e5e9c6401a1d73bc381a4971b39845971247162d728528a970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_8df0752a50bf44e5e9c6401a1d73bc381a4971b39845971247162d728528a970->leave($__internal_8df0752a50bf44e5e9c6401a1d73bc381a4971b39845971247162d728528a970_prof);

        
        $__internal_26c6d90edc23cd15959e9006c38d383cb3df08750caeec9c6bc2aee800013710->leave($__internal_26c6d90edc23cd15959e9006c38d383cb3df08750caeec9c6bc2aee800013710_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bd17185e756cd1a5444a50b368bde089993d4ebc8d5bf06bb37ac627c1715ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd17185e756cd1a5444a50b368bde089993d4ebc8d5bf06bb37ac627c1715ad->enter($__internal_2bd17185e756cd1a5444a50b368bde089993d4ebc8d5bf06bb37ac627c1715ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_50f8c334e5c336c17124158dd9a720e314a76153ff5e0cc34c5a8eadff72101a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f8c334e5c336c17124158dd9a720e314a76153ff5e0cc34c5a8eadff72101a->enter($__internal_50f8c334e5c336c17124158dd9a720e314a76153ff5e0cc34c5a8eadff72101a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_50f8c334e5c336c17124158dd9a720e314a76153ff5e0cc34c5a8eadff72101a->leave($__internal_50f8c334e5c336c17124158dd9a720e314a76153ff5e0cc34c5a8eadff72101a_prof);

        
        $__internal_2bd17185e756cd1a5444a50b368bde089993d4ebc8d5bf06bb37ac627c1715ad->leave($__internal_2bd17185e756cd1a5444a50b368bde089993d4ebc8d5bf06bb37ac627c1715ad_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2c93315030fc2b55ed73917e679a6233b2f2c29142bbd6ff03125c0ac641d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2c93315030fc2b55ed73917e679a6233b2f2c29142bbd6ff03125c0ac641d0->enter($__internal_bf2c93315030fc2b55ed73917e679a6233b2f2c29142bbd6ff03125c0ac641d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac5cb3999c7119a5f7672be165fcc517dddfb694da75dfc1d6c8b2b944f324ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5cb3999c7119a5f7672be165fcc517dddfb694da75dfc1d6c8b2b944f324ad->enter($__internal_ac5cb3999c7119a5f7672be165fcc517dddfb694da75dfc1d6c8b2b944f324ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
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
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 32
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:index.html.twig", 32)->display($context);
        // line 33
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 35
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:index.html.twig", 35)->display($context);
        // line 36
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS</h5>
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
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 72
            echo "                    <tr>
                        <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_show", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "prenom", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "chargeRecrutement", array()), "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "intitule", array()), "html", null, true);
            echo "</td>
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nomClient"]) ? $context["nomClient"] : $this->getContext($context, "nomClient")));
            foreach ($context['_seq'] as $context["idOffre"] => $context["client"]) {
                // line 77
                echo "                            ";
                if (($context["idOffre"] == $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "id", array()))) {
                    // line 78
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idOffre'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        <td style=\"text-align: right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons\">mode_edit</i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_delete", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";><i class=\"material-icons\">delete</i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_ac5cb3999c7119a5f7672be165fcc517dddfb694da75dfc1d6c8b2b944f324ad->leave($__internal_ac5cb3999c7119a5f7672be165fcc517dddfb694da75dfc1d6c8b2b944f324ad_prof);

        
        $__internal_bf2c93315030fc2b55ed73917e679a6233b2f2c29142bbd6ff03125c0ac641d0->leave($__internal_bf2c93315030fc2b55ed73917e679a6233b2f2c29142bbd6ff03125c0ac641d0_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 84,  233 => 81,  227 => 80,  221 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  198 => 73,  195 => 72,  191 => 71,  167 => 49,  158 => 47,  154 => 46,  142 => 36,  140 => 35,  136 => 33,  134 => 32,  126 => 27,  123 => 26,  117 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">{{ flash_message }}.</div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for candidat in candidats %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_candidat_show', { 'id': candidat.id }) }}\">{{ candidat.nom }} {{ candidat.prenom }}</a></td>
                        <td>{{ candidat.chargeRecrutement.username }}</td>
                        <td>{{ candidat.emploi.intitule }}</td>
                        {% for idOffre, client in nomClient %}
                            {% if idOffre == candidat.emploi.id      %}
                                <td> {{ client }}</td>
                            {% endif %}
                        {% endfor %}
                        <td style=\"text-align: right\"><a href=\"{{ path ('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\"><i class=\"material-icons\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_candidat_delete', { 'id': candidat.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";><i class=\"material-icons\">delete</i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Candidat:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/index.html.twig");
    }
}
