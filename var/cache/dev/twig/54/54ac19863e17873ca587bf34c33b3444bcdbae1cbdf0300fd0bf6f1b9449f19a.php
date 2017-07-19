<?php

/* @MALrm/Emploi/show.html.twig */
class __TwigTemplate_b60a188fedde7353f0a8ed8f724d7d070bca121eb3dc376145ff02166d550319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Emploi/show.html.twig", 1);
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
        $__internal_96592300f9445070b2901f111cbe45789a159172c46af012fe430bb83de6fc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96592300f9445070b2901f111cbe45789a159172c46af012fe430bb83de6fc70->enter($__internal_96592300f9445070b2901f111cbe45789a159172c46af012fe430bb83de6fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/show.html.twig"));

        $__internal_5f8420eb48ad536a83f514cbb50c89560b95fddfde6741fb1e47100c3f9e45e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8420eb48ad536a83f514cbb50c89560b95fddfde6741fb1e47100c3f9e45e4->enter($__internal_5f8420eb48ad536a83f514cbb50c89560b95fddfde6741fb1e47100c3f9e45e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96592300f9445070b2901f111cbe45789a159172c46af012fe430bb83de6fc70->leave($__internal_96592300f9445070b2901f111cbe45789a159172c46af012fe430bb83de6fc70_prof);

        
        $__internal_5f8420eb48ad536a83f514cbb50c89560b95fddfde6741fb1e47100c3f9e45e4->leave($__internal_5f8420eb48ad536a83f514cbb50c89560b95fddfde6741fb1e47100c3f9e45e4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0e4b73c5c26d3bd8310bf30d7b7f0a7791468c12fee70fcd3fe691954a3431e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e4b73c5c26d3bd8310bf30d7b7f0a7791468c12fee70fcd3fe691954a3431e->enter($__internal_a0e4b73c5c26d3bd8310bf30d7b7f0a7791468c12fee70fcd3fe691954a3431e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ddfb609a3370972b34097e51f75f19bbf48947c598e5dcfd03cbefb213e6fd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfb609a3370972b34097e51f75f19bbf48947c598e5dcfd03cbefb213e6fd15->enter($__internal_ddfb609a3370972b34097e51f75f19bbf48947c598e5dcfd03cbefb213e6fd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ddfb609a3370972b34097e51f75f19bbf48947c598e5dcfd03cbefb213e6fd15->leave($__internal_ddfb609a3370972b34097e51f75f19bbf48947c598e5dcfd03cbefb213e6fd15_prof);

        
        $__internal_a0e4b73c5c26d3bd8310bf30d7b7f0a7791468c12fee70fcd3fe691954a3431e->leave($__internal_a0e4b73c5c26d3bd8310bf30d7b7f0a7791468c12fee70fcd3fe691954a3431e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_155e2c1ccfef1f848e306224d83a029ccd220e2fca0adbf67cf62cc81fdae73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155e2c1ccfef1f848e306224d83a029ccd220e2fca0adbf67cf62cc81fdae73a->enter($__internal_155e2c1ccfef1f848e306224d83a029ccd220e2fca0adbf67cf62cc81fdae73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85dbb7f2c917bd70ee92675a40c69a085cf92e76a6641350debde2f7f369b8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dbb7f2c917bd70ee92675a40c69a085cf92e76a6641350debde2f7f369b8ba->enter($__internal_85dbb7f2c917bd70ee92675a40c69a085cf92e76a6641350debde2f7f369b8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_85dbb7f2c917bd70ee92675a40c69a085cf92e76a6641350debde2f7f369b8ba->leave($__internal_85dbb7f2c917bd70ee92675a40c69a085cf92e76a6641350debde2f7f369b8ba_prof);

        
        $__internal_155e2c1ccfef1f848e306224d83a029ccd220e2fca0adbf67cf62cc81fdae73a->leave($__internal_155e2c1ccfef1f848e306224d83a029ccd220e2fca0adbf67cf62cc81fdae73a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8a7d1e0c1b670b741bd904a92b8cd095aa20ef32e83ebc8e50d94aa59d6091b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a7d1e0c1b670b741bd904a92b8cd095aa20ef32e83ebc8e50d94aa59d6091b->enter($__internal_f8a7d1e0c1b670b741bd904a92b8cd095aa20ef32e83ebc8e50d94aa59d6091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e010351431962b38c90dff088a17242e2301104534f3a3c1adea46a88ac0258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e010351431962b38c90dff088a17242e2301104534f3a3c1adea46a88ac0258->enter($__internal_2e010351431962b38c90dff088a17242e2301104534f3a3c1adea46a88ac0258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 19
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 24
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/show.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>RESUME OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UNE OFFRE:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "intitule", array())), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_edit", array("id" => $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "id", array()))), "html", null, true);
        echo "\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de emploi</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "client", array()), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitulé du poste</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type de contrat</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "contrat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu d'exercice</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "villeCodePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "villeActivite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Site de parution</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["siteParution"]) ? $context["siteParution"] : $this->getContext($context, "siteParution")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    ";
        // line 81
        echo "    ";
        // line 82
        echo "    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "    ";
        // line 86
        echo "    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_emploi\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer cette offre d\\'emploi ?');\">Supprimer</button>
            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>


";
        
        $__internal_2e010351431962b38c90dff088a17242e2301104534f3a3c1adea46a88ac0258->leave($__internal_2e010351431962b38c90dff088a17242e2301104534f3a3c1adea46a88ac0258_prof);

        
        $__internal_f8a7d1e0c1b670b741bd904a92b8cd095aa20ef32e83ebc8e50d94aa59d6091b->leave($__internal_f8a7d1e0c1b670b741bd904a92b8cd095aa20ef32e83ebc8e50d94aa59d6091b_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Emploi/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 90,  224 => 88,  220 => 86,  218 => 85,  216 => 84,  214 => 83,  212 => 82,  210 => 81,  202 => 75,  195 => 71,  186 => 67,  179 => 63,  172 => 59,  165 => 55,  158 => 51,  145 => 41,  139 => 38,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
 {% endblock %}
{% block javascripts %}
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
        <h3>RESUME OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UNE OFFRE:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>{{ emploi.intitule|upper }}</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path('ma_lrm_emploi_edit', { 'id': emploi.id }) }}\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de emploi</th>
                <td>{{ emploi.id }}</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>{{ emploi.client.denomination }}</td>
            </tr>
            <tr>
                <th>Intitulé du poste</th>
                <td>{{ emploi.intitule }}</td>
            </tr>
            <tr>
                <th>Type de contrat</th>
                <td>{{ emploi.contrat }}</td>
            </tr>
            <tr>
                <th>Lieu d'exercice</th>
                <td>{{ emploi.villeCodePostal }} - {{ emploi.villeActivite}}</td>
            </tr>
            <tr>
                <th>Site de parution</th>
                <td>{{ siteParution }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ emploi.description }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    {#<div class=\"row\">#}
    {#<div class=\"col-lg-2\">Commentaires</div>#}
    {#<div class=\"row\">#}
    {#<div class=\"col-lg-4\">{{ emploi.commentaire }}</div>#}
    {#</div>#}
    {#</div>#}
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            {{ form_start(delete_form) }}
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_emploi\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer cette offre d\\'emploi ?');\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    </div>


{% endblock %}", "@MALrm/Emploi/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\show.html.twig");
    }
}
