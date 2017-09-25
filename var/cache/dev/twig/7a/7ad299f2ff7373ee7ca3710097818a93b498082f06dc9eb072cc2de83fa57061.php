<?php

/* MALrmBundle:Candidat:show.html.twig */
class __TwigTemplate_50ea5dc98bcf5adfb8289aa1b3ce9d0643b079628b85633eb3c99e6226dd0ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:show.html.twig", 1);
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
        $__internal_5b69150f46b4cf2962c241331ad75444dfd913cd4b6e72ee75974655d8db44cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b69150f46b4cf2962c241331ad75444dfd913cd4b6e72ee75974655d8db44cf->enter($__internal_5b69150f46b4cf2962c241331ad75444dfd913cd4b6e72ee75974655d8db44cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $__internal_7b70e51309e967823de8a9ed4fb72c31c69c1e18208c4425e87790484a49fc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b70e51309e967823de8a9ed4fb72c31c69c1e18208c4425e87790484a49fc0f->enter($__internal_7b70e51309e967823de8a9ed4fb72c31c69c1e18208c4425e87790484a49fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b69150f46b4cf2962c241331ad75444dfd913cd4b6e72ee75974655d8db44cf->leave($__internal_5b69150f46b4cf2962c241331ad75444dfd913cd4b6e72ee75974655d8db44cf_prof);

        
        $__internal_7b70e51309e967823de8a9ed4fb72c31c69c1e18208c4425e87790484a49fc0f->leave($__internal_7b70e51309e967823de8a9ed4fb72c31c69c1e18208c4425e87790484a49fc0f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dd925ec3c2e39889987f4fd11138fe96a221938ccf1cc4df46bba62ae0c15e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd925ec3c2e39889987f4fd11138fe96a221938ccf1cc4df46bba62ae0c15e0->enter($__internal_7dd925ec3c2e39889987f4fd11138fe96a221938ccf1cc4df46bba62ae0c15e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_de2bb32adc9a433478240a27a388df9e77c55bd217063854f4bf3e7213cf92e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2bb32adc9a433478240a27a388df9e77c55bd217063854f4bf3e7213cf92e2->enter($__internal_de2bb32adc9a433478240a27a388df9e77c55bd217063854f4bf3e7213cf92e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_de2bb32adc9a433478240a27a388df9e77c55bd217063854f4bf3e7213cf92e2->leave($__internal_de2bb32adc9a433478240a27a388df9e77c55bd217063854f4bf3e7213cf92e2_prof);

        
        $__internal_7dd925ec3c2e39889987f4fd11138fe96a221938ccf1cc4df46bba62ae0c15e0->leave($__internal_7dd925ec3c2e39889987f4fd11138fe96a221938ccf1cc4df46bba62ae0c15e0_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8d983994c84cb4d1dfacd7cd328a5497f4f2c1acc8e1d98a51713c4b9cf86cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d983994c84cb4d1dfacd7cd328a5497f4f2c1acc8e1d98a51713c4b9cf86cb->enter($__internal_d8d983994c84cb4d1dfacd7cd328a5497f4f2c1acc8e1d98a51713c4b9cf86cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4493b47f25fcaaf06c7fca8a103b5e857c9acd60de1dd22e1b5d060a40c30595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4493b47f25fcaaf06c7fca8a103b5e857c9acd60de1dd22e1b5d060a40c30595->enter($__internal_4493b47f25fcaaf06c7fca8a103b5e857c9acd60de1dd22e1b5d060a40c30595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4493b47f25fcaaf06c7fca8a103b5e857c9acd60de1dd22e1b5d060a40c30595->leave($__internal_4493b47f25fcaaf06c7fca8a103b5e857c9acd60de1dd22e1b5d060a40c30595_prof);

        
        $__internal_d8d983994c84cb4d1dfacd7cd328a5497f4f2c1acc8e1d98a51713c4b9cf86cb->leave($__internal_d8d983994c84cb4d1dfacd7cd328a5497f4f2c1acc8e1d98a51713c4b9cf86cb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_04503c029ac13b145458ebd3d5751739ecab49fb55e08daf86d8eaae8a86fcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04503c029ac13b145458ebd3d5751739ecab49fb55e08daf86d8eaae8a86fcc0->enter($__internal_04503c029ac13b145458ebd3d5751739ecab49fb55e08daf86d8eaae8a86fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e23077e0b96b123a233efc953388cc2584da27b7fcd9e187c6a73c7e7eb5c1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23077e0b96b123a233efc953388cc2584da27b7fcd9e187c6a73c7e7eb5c1c2->enter($__internal_e23077e0b96b123a233efc953388cc2584da27b7fcd9e187c6a73c7e7eb5c1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
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
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:show.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:show.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                ";
        // line 60
        if ( !twig_test_empty($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()))) {
            // line 61
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
            echo " ans</td>
                ";
        } else {
            // line 63
            echo "                <td> -- </td>
                ";
        }
        // line 65
        echo "            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "adresse", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "villeCodePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prétentions salariales</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "pretention", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 86
        echo "            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_candidat\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce candidat ?');\"><i class=\"material-icons\">delete</i></button>
            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>




";
        
        $__internal_e23077e0b96b123a233efc953388cc2584da27b7fcd9e187c6a73c7e7eb5c1c2->leave($__internal_e23077e0b96b123a233efc953388cc2584da27b7fcd9e187c6a73c7e7eb5c1c2_prof);

        
        $__internal_04503c029ac13b145458ebd3d5751739ecab49fb55e08daf86d8eaae8a86fcc0->leave($__internal_04503c029ac13b145458ebd3d5751739ecab49fb55e08daf86d8eaae8a86fcc0_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 98,  246 => 96,  236 => 89,  231 => 86,  225 => 84,  218 => 80,  211 => 76,  204 => 72,  193 => 68,  188 => 65,  184 => 63,  178 => 61,  176 => 60,  169 => 56,  162 => 52,  149 => 42,  141 => 39,  129 => 29,  127 => 28,  123 => 26,  121 => 25,  113 => 20,  110 => 19,  104 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\" ><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ candidat.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ candidat.prenom }}</td>
            </tr>
            <tr>
                <th>Age</th>
                {% if candidat.age is not empty %}
                <td>{{ candidat.age }} ans</td>
                {% else %}
                <td> -- </td>
                {% endif %}
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ candidat.adresse }} - {{ candidat.villeCodePostal }} - {{ candidat.ville }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ candidat.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ candidat.email }}</td>
            </tr>
            <tr>
                <th>Prétentions salariales</th>
                <td>{{ candidat.pretention }}</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</a></td>
                {#<td><iframe src =\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</iframe></td>#}
            </tr>
            <tr>
                <th>Commentaires</th>
                <td>{{ candidat.commentaire }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            {{ form_start(delete_form) }}
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_candidat\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce candidat ?');\"><i class=\"material-icons\">delete</i></button>
            {{ form_end(delete_form) }}
        </div>
    </div>




{% endblock %}", "MALrmBundle:Candidat:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/show.html.twig");
    }
}
