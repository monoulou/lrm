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
        $__internal_db79bd224c04a542903a41761f3e1a244923ffc3c202b700fdbee78614de3fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db79bd224c04a542903a41761f3e1a244923ffc3c202b700fdbee78614de3fee->enter($__internal_db79bd224c04a542903a41761f3e1a244923ffc3c202b700fdbee78614de3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $__internal_45c1874ec7834c93b97e952654162787ce0dafaacdaf7ed4865780e6eaa71e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c1874ec7834c93b97e952654162787ce0dafaacdaf7ed4865780e6eaa71e18->enter($__internal_45c1874ec7834c93b97e952654162787ce0dafaacdaf7ed4865780e6eaa71e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db79bd224c04a542903a41761f3e1a244923ffc3c202b700fdbee78614de3fee->leave($__internal_db79bd224c04a542903a41761f3e1a244923ffc3c202b700fdbee78614de3fee_prof);

        
        $__internal_45c1874ec7834c93b97e952654162787ce0dafaacdaf7ed4865780e6eaa71e18->leave($__internal_45c1874ec7834c93b97e952654162787ce0dafaacdaf7ed4865780e6eaa71e18_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04de4065c0669173f8f6a35d0b990d9dad97355e36baf94ed1c6f96dc95454e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04de4065c0669173f8f6a35d0b990d9dad97355e36baf94ed1c6f96dc95454e7->enter($__internal_04de4065c0669173f8f6a35d0b990d9dad97355e36baf94ed1c6f96dc95454e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a5d8fbf10e15fac9381e2936449ce24df8e1bd1e8300a7d75a57fdf6bda2fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5d8fbf10e15fac9381e2936449ce24df8e1bd1e8300a7d75a57fdf6bda2fdc->enter($__internal_4a5d8fbf10e15fac9381e2936449ce24df8e1bd1e8300a7d75a57fdf6bda2fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_4a5d8fbf10e15fac9381e2936449ce24df8e1bd1e8300a7d75a57fdf6bda2fdc->leave($__internal_4a5d8fbf10e15fac9381e2936449ce24df8e1bd1e8300a7d75a57fdf6bda2fdc_prof);

        
        $__internal_04de4065c0669173f8f6a35d0b990d9dad97355e36baf94ed1c6f96dc95454e7->leave($__internal_04de4065c0669173f8f6a35d0b990d9dad97355e36baf94ed1c6f96dc95454e7_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d06ff8741a6b4a1bfb5d31da38660c32f56584a5d701c91acfd3d46a47388c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06ff8741a6b4a1bfb5d31da38660c32f56584a5d701c91acfd3d46a47388c36->enter($__internal_d06ff8741a6b4a1bfb5d31da38660c32f56584a5d701c91acfd3d46a47388c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_695b173106985f68bfd15feae6686103c2ae97c9da839ccdaf6c034eb792c0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695b173106985f68bfd15feae6686103c2ae97c9da839ccdaf6c034eb792c0c6->enter($__internal_695b173106985f68bfd15feae6686103c2ae97c9da839ccdaf6c034eb792c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_695b173106985f68bfd15feae6686103c2ae97c9da839ccdaf6c034eb792c0c6->leave($__internal_695b173106985f68bfd15feae6686103c2ae97c9da839ccdaf6c034eb792c0c6_prof);

        
        $__internal_d06ff8741a6b4a1bfb5d31da38660c32f56584a5d701c91acfd3d46a47388c36->leave($__internal_d06ff8741a6b4a1bfb5d31da38660c32f56584a5d701c91acfd3d46a47388c36_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3977538b44bb65a449db4138bcebc9cc95f0862b5672bd922695a9ffcf9fd7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3977538b44bb65a449db4138bcebc9cc95f0862b5672bd922695a9ffcf9fd7da->enter($__internal_3977538b44bb65a449db4138bcebc9cc95f0862b5672bd922695a9ffcf9fd7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52e5e9f202cbbeb862a0b21e959e3dbfe53f6a881beca9c143e79a18566e72d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e5e9f202cbbeb862a0b21e959e3dbfe53f6a881beca9c143e79a18566e72d2->enter($__internal_52e5e9f202cbbeb862a0b21e959e3dbfe53f6a881beca9c143e79a18566e72d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:show.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de candidat</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
        echo " ans</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 67
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
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 81
        echo "            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_candidat\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce candidat ?');\"><i class=\"material-icons\">delete</i></button>
            ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>




";
        
        $__internal_52e5e9f202cbbeb862a0b21e959e3dbfe53f6a881beca9c143e79a18566e72d2->leave($__internal_52e5e9f202cbbeb862a0b21e959e3dbfe53f6a881beca9c143e79a18566e72d2_prof);

        
        $__internal_3977538b44bb65a449db4138bcebc9cc95f0862b5672bd922695a9ffcf9fd7da->leave($__internal_3977538b44bb65a449db4138bcebc9cc95f0862b5672bd922695a9ffcf9fd7da_prof);

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
        return array (  239 => 93,  234 => 91,  224 => 84,  219 => 81,  213 => 79,  206 => 75,  199 => 71,  188 => 67,  181 => 63,  174 => 59,  167 => 55,  160 => 51,  147 => 41,  139 => 38,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
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
                <th>Numéro de candidat</th>
                <td>{{ candidat.id }}</td>
            </tr>
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
                <td>{{ candidat.age }} ans</td>
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
