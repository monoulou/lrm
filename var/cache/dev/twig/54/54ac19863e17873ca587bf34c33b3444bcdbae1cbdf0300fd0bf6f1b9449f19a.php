<?php

/* MALrmBundle:Emploi:show.html.twig */
class __TwigTemplate_b60a188fedde7353f0a8ed8f724d7d070bca121eb3dc376145ff02166d550319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Emploi:show.html.twig", 1);
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
        $__internal_17e0c243c99507da740dcb90cd8ddc4e876961fdfa20a6191a90ad7c89c6320c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e0c243c99507da740dcb90cd8ddc4e876961fdfa20a6191a90ad7c89c6320c->enter($__internal_17e0c243c99507da740dcb90cd8ddc4e876961fdfa20a6191a90ad7c89c6320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:show.html.twig"));

        $__internal_e557387d3e54362344ab91316068e63246b161260595ac93ea78036b0ca7ed44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e557387d3e54362344ab91316068e63246b161260595ac93ea78036b0ca7ed44->enter($__internal_e557387d3e54362344ab91316068e63246b161260595ac93ea78036b0ca7ed44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e0c243c99507da740dcb90cd8ddc4e876961fdfa20a6191a90ad7c89c6320c->leave($__internal_17e0c243c99507da740dcb90cd8ddc4e876961fdfa20a6191a90ad7c89c6320c_prof);

        
        $__internal_e557387d3e54362344ab91316068e63246b161260595ac93ea78036b0ca7ed44->leave($__internal_e557387d3e54362344ab91316068e63246b161260595ac93ea78036b0ca7ed44_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43156404262c6a96dde4f8ae09cbb47f91d0a266be90fe3271253d5730792a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43156404262c6a96dde4f8ae09cbb47f91d0a266be90fe3271253d5730792a0f->enter($__internal_43156404262c6a96dde4f8ae09cbb47f91d0a266be90fe3271253d5730792a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7efca357f7154907762a747e4530c665764ff1a6ef326fd9f07f034e7566567d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efca357f7154907762a747e4530c665764ff1a6ef326fd9f07f034e7566567d->enter($__internal_7efca357f7154907762a747e4530c665764ff1a6ef326fd9f07f034e7566567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_7efca357f7154907762a747e4530c665764ff1a6ef326fd9f07f034e7566567d->leave($__internal_7efca357f7154907762a747e4530c665764ff1a6ef326fd9f07f034e7566567d_prof);

        
        $__internal_43156404262c6a96dde4f8ae09cbb47f91d0a266be90fe3271253d5730792a0f->leave($__internal_43156404262c6a96dde4f8ae09cbb47f91d0a266be90fe3271253d5730792a0f_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a29652882f35f4ca2f096dd12ca1be5e5664ec8bdaff4e2481b9dc785de94847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29652882f35f4ca2f096dd12ca1be5e5664ec8bdaff4e2481b9dc785de94847->enter($__internal_a29652882f35f4ca2f096dd12ca1be5e5664ec8bdaff4e2481b9dc785de94847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3a05e47561ef6a2440fc5725a609fe2a9822ae6e76dbb9a650e8debb2a572b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a05e47561ef6a2440fc5725a609fe2a9822ae6e76dbb9a650e8debb2a572b5->enter($__internal_a3a05e47561ef6a2440fc5725a609fe2a9822ae6e76dbb9a650e8debb2a572b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3a05e47561ef6a2440fc5725a609fe2a9822ae6e76dbb9a650e8debb2a572b5->leave($__internal_a3a05e47561ef6a2440fc5725a609fe2a9822ae6e76dbb9a650e8debb2a572b5_prof);

        
        $__internal_a29652882f35f4ca2f096dd12ca1be5e5664ec8bdaff4e2481b9dc785de94847->leave($__internal_a29652882f35f4ca2f096dd12ca1be5e5664ec8bdaff4e2481b9dc785de94847_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_da207723b251bd01dfa73063af14d82f92b494c12192a14b22d0dfc20d9d26ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da207723b251bd01dfa73063af14d82f92b494c12192a14b22d0dfc20d9d26ad->enter($__internal_da207723b251bd01dfa73063af14d82f92b494c12192a14b22d0dfc20d9d26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_596cf242f87a0aa06829bba92708e491ba26df6d231337eb4533a2546eac7aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596cf242f87a0aa06829bba92708e491ba26df6d231337eb4533a2546eac7aef->enter($__internal_596cf242f87a0aa06829bba92708e491ba26df6d231337eb4533a2546eac7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:show.html.twig", 27)->display($context);
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
        
        $__internal_596cf242f87a0aa06829bba92708e491ba26df6d231337eb4533a2546eac7aef->leave($__internal_596cf242f87a0aa06829bba92708e491ba26df6d231337eb4533a2546eac7aef_prof);

        
        $__internal_da207723b251bd01dfa73063af14d82f92b494c12192a14b22d0dfc20d9d26ad->leave($__internal_da207723b251bd01dfa73063af14d82f92b494c12192a14b22d0dfc20d9d26ad_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Emploi:show.html.twig";
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


{% endblock %}", "MALrmBundle:Emploi:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\show.html.twig");
    }
}
