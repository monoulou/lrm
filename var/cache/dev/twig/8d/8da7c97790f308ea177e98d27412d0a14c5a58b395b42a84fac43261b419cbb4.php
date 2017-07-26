<?php

/* MALrmBundle:Candidat:index.html.twig */
class __TwigTemplate_5c1402f488dc179520314c61c014a89dc9c0305c68422fbf0ecf7943fbbc41e8 extends Twig_Template
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
        $__internal_00486742aabacc84ea2dfc6e76138aada4388101cd58a7abce01313c40627541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00486742aabacc84ea2dfc6e76138aada4388101cd58a7abce01313c40627541->enter($__internal_00486742aabacc84ea2dfc6e76138aada4388101cd58a7abce01313c40627541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $__internal_d4d985a730c7004d40ff12d61ea4c67feac4cb0a7b7a9ca13fdbb56bd6227339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d985a730c7004d40ff12d61ea4c67feac4cb0a7b7a9ca13fdbb56bd6227339->enter($__internal_d4d985a730c7004d40ff12d61ea4c67feac4cb0a7b7a9ca13fdbb56bd6227339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00486742aabacc84ea2dfc6e76138aada4388101cd58a7abce01313c40627541->leave($__internal_00486742aabacc84ea2dfc6e76138aada4388101cd58a7abce01313c40627541_prof);

        
        $__internal_d4d985a730c7004d40ff12d61ea4c67feac4cb0a7b7a9ca13fdbb56bd6227339->leave($__internal_d4d985a730c7004d40ff12d61ea4c67feac4cb0a7b7a9ca13fdbb56bd6227339_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97a46d36d5565de22f1de0750051e5dd1fca7a49e300900198a0bc4e3722da0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a46d36d5565de22f1de0750051e5dd1fca7a49e300900198a0bc4e3722da0b->enter($__internal_97a46d36d5565de22f1de0750051e5dd1fca7a49e300900198a0bc4e3722da0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_241f39aa92ce81367eab4327a1206bdcf854b0618d8315ed0b103e2570c1cf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241f39aa92ce81367eab4327a1206bdcf854b0618d8315ed0b103e2570c1cf3d->enter($__internal_241f39aa92ce81367eab4327a1206bdcf854b0618d8315ed0b103e2570c1cf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_241f39aa92ce81367eab4327a1206bdcf854b0618d8315ed0b103e2570c1cf3d->leave($__internal_241f39aa92ce81367eab4327a1206bdcf854b0618d8315ed0b103e2570c1cf3d_prof);

        
        $__internal_97a46d36d5565de22f1de0750051e5dd1fca7a49e300900198a0bc4e3722da0b->leave($__internal_97a46d36d5565de22f1de0750051e5dd1fca7a49e300900198a0bc4e3722da0b_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4d1466e2753ee54b35bc841e4b81742cb901356ccd8a2c34a85a092fdb95da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d1466e2753ee54b35bc841e4b81742cb901356ccd8a2c34a85a092fdb95da3->enter($__internal_e4d1466e2753ee54b35bc841e4b81742cb901356ccd8a2c34a85a092fdb95da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_09920bdb42c587897fd435ad304aae3c1ae7ac562abd6affdb88172325a243a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09920bdb42c587897fd435ad304aae3c1ae7ac562abd6affdb88172325a243a5->enter($__internal_09920bdb42c587897fd435ad304aae3c1ae7ac562abd6affdb88172325a243a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_09920bdb42c587897fd435ad304aae3c1ae7ac562abd6affdb88172325a243a5->leave($__internal_09920bdb42c587897fd435ad304aae3c1ae7ac562abd6affdb88172325a243a5_prof);

        
        $__internal_e4d1466e2753ee54b35bc841e4b81742cb901356ccd8a2c34a85a092fdb95da3->leave($__internal_e4d1466e2753ee54b35bc841e4b81742cb901356ccd8a2c34a85a092fdb95da3_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_031f1bae321266349d78af6fe1d10369ef8782bfd4dcb99a5af4e0a1ff7a96fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031f1bae321266349d78af6fe1d10369ef8782bfd4dcb99a5af4e0a1ff7a96fe->enter($__internal_031f1bae321266349d78af6fe1d10369ef8782bfd4dcb99a5af4e0a1ff7a96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e12bcbecacec2ffde40729aae12c03464f5d1b6b179633724d977453fafa4381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12bcbecacec2ffde40729aae12c03464f5d1b6b179633724d977453fafa4381->enter($__internal_e12bcbecacec2ffde40729aae12c03464f5d1b6b179633724d977453fafa4381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
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
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "intitule", array()), "html", null, true);
            echo "</td>
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nomClient"]) ? $context["nomClient"] : $this->getContext($context, "nomClient")));
            foreach ($context['_seq'] as $context["idOffre"] => $context["client"]) {
                // line 76
                echo "                            ";
                if (($context["idOffre"] == $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "id", array()))) {
                    // line 77
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 79
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idOffre'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>/<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_delete", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";>Supprimer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_e12bcbecacec2ffde40729aae12c03464f5d1b6b179633724d977453fafa4381->leave($__internal_e12bcbecacec2ffde40729aae12c03464f5d1b6b179633724d977453fafa4381_prof);

        
        $__internal_031f1bae321266349d78af6fe1d10369ef8782bfd4dcb99a5af4e0a1ff7a96fe->leave($__internal_031f1bae321266349d78af6fe1d10369ef8782bfd4dcb99a5af4e0a1ff7a96fe_prof);

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
        return array (  241 => 83,  229 => 80,  223 => 79,  217 => 77,  214 => 76,  210 => 75,  206 => 74,  198 => 73,  195 => 72,  191 => 71,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
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
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for candidat in candidats %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_candidat_show', { 'id': candidat.id }) }}\">{{ candidat.nom }} {{ candidat.prenom }}</a></td>
                        <td>{{ candidat.emploi.intitule }}</td>
                        {% for idOffre, client in nomClient %}
                            {% if idOffre == candidat.emploi.id      %}
                                <td> {{ client }}</td>
                            {% endif %}
                        {% endfor %}
                        <td><a href=\"{{ path ('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_candidat_delete', { 'id': candidat.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";>Supprimer</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Candidat:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\index.html.twig");
    }
}
