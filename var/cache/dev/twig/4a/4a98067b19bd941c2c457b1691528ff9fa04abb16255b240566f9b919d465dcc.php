<?php

/* @MALrm/Emploi/edit.html.twig */
class __TwigTemplate_bd01dc8834a8caf0a60b6019f9f11bf35e5f3ce58de3362fa5f52286731e878a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Emploi/edit.html.twig", 1);
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
        $__internal_7ee181422ce84a34ba4226b3202437a0a16aa4b54f7a5b3162d50b832b4390ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee181422ce84a34ba4226b3202437a0a16aa4b54f7a5b3162d50b832b4390ed->enter($__internal_7ee181422ce84a34ba4226b3202437a0a16aa4b54f7a5b3162d50b832b4390ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/edit.html.twig"));

        $__internal_d9aa388ab6b1ce18524f3497779ab35381a027889b63463237958b7b13fbb187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9aa388ab6b1ce18524f3497779ab35381a027889b63463237958b7b13fbb187->enter($__internal_d9aa388ab6b1ce18524f3497779ab35381a027889b63463237958b7b13fbb187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee181422ce84a34ba4226b3202437a0a16aa4b54f7a5b3162d50b832b4390ed->leave($__internal_7ee181422ce84a34ba4226b3202437a0a16aa4b54f7a5b3162d50b832b4390ed_prof);

        
        $__internal_d9aa388ab6b1ce18524f3497779ab35381a027889b63463237958b7b13fbb187->leave($__internal_d9aa388ab6b1ce18524f3497779ab35381a027889b63463237958b7b13fbb187_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c4f79f03b43ee5a359cebb428a17c7e355f44cbb6a5b08408df87a861272cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4f79f03b43ee5a359cebb428a17c7e355f44cbb6a5b08408df87a861272cfa->enter($__internal_4c4f79f03b43ee5a359cebb428a17c7e355f44cbb6a5b08408df87a861272cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcd919c0fd8f23867e7bf88404d347ab929658a86bff04417da6206ba7499f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd919c0fd8f23867e7bf88404d347ab929658a86bff04417da6206ba7499f52->enter($__internal_bcd919c0fd8f23867e7bf88404d347ab929658a86bff04417da6206ba7499f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_bcd919c0fd8f23867e7bf88404d347ab929658a86bff04417da6206ba7499f52->leave($__internal_bcd919c0fd8f23867e7bf88404d347ab929658a86bff04417da6206ba7499f52_prof);

        
        $__internal_4c4f79f03b43ee5a359cebb428a17c7e355f44cbb6a5b08408df87a861272cfa->leave($__internal_4c4f79f03b43ee5a359cebb428a17c7e355f44cbb6a5b08408df87a861272cfa_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9b065ce9b46d54a40b21d518c4f461655ac0f680200cc18a5dd260a8d13119a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b065ce9b46d54a40b21d518c4f461655ac0f680200cc18a5dd260a8d13119a->enter($__internal_f9b065ce9b46d54a40b21d518c4f461655ac0f680200cc18a5dd260a8d13119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9555ba87064b32b88b3d6d922da86feab7d7fffdebb37298b40bc41a429738d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9555ba87064b32b88b3d6d922da86feab7d7fffdebb37298b40bc41a429738d->enter($__internal_e9555ba87064b32b88b3d6d922da86feab7d7fffdebb37298b40bc41a429738d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e9555ba87064b32b88b3d6d922da86feab7d7fffdebb37298b40bc41a429738d->leave($__internal_e9555ba87064b32b88b3d6d922da86feab7d7fffdebb37298b40bc41a429738d_prof);

        
        $__internal_f9b065ce9b46d54a40b21d518c4f461655ac0f680200cc18a5dd260a8d13119a->leave($__internal_f9b065ce9b46d54a40b21d518c4f461655ac0f680200cc18a5dd260a8d13119a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e273335e64dd9db596f3a382afcb8629f34e178c82b69345ddfc96251fccb972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e273335e64dd9db596f3a382afcb8629f34e178c82b69345ddfc96251fccb972->enter($__internal_e273335e64dd9db596f3a382afcb8629f34e178c82b69345ddfc96251fccb972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0320af352200008ee3de5c9782241a462ab65d12a7cef9982f57cec7149ef927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0320af352200008ee3de5c9782241a462ab65d12a7cef9982f57cec7149ef927->enter($__internal_0320af352200008ee3de5c9782241a462ab65d12a7cef9982f57cec7149ef927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 18
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 20
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/edit.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/edit.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "intitule", array())), "html", null, true);
        echo "</h1>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Entreprise:</label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Intitulé du poste:</label>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'errors');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type de contrat:</label>
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrat", array()), 'errors');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrat", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <label class=\"control-label\">Lieu d'activité:</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    ";
        // line 81
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    ";
        // line 88
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeActivite", array()), 'errors');
        echo "
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeActivite", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nombre de postes:</label>
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrePoste", array()), 'errors');
        echo "
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrePoste", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Site de parution:</label>
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siteParution", array()), 'errors');
        echo "
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siteParution", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Description du poste:</label>
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-5\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregistrer</button>
            </div>
        </div>
        ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_0320af352200008ee3de5c9782241a462ab65d12a7cef9982f57cec7149ef927->leave($__internal_0320af352200008ee3de5c9782241a462ab65d12a7cef9982f57cec7149ef927_prof);

        
        $__internal_e273335e64dd9db596f3a382afcb8629f34e178c82b69345ddfc96251fccb972->leave($__internal_e273335e64dd9db596f3a382afcb8629f34e178c82b69345ddfc96251fccb972_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Emploi/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 123,  270 => 114,  266 => 113,  255 => 105,  251 => 104,  242 => 98,  238 => 97,  227 => 89,  222 => 88,  214 => 82,  209 => 81,  194 => 68,  190 => 67,  181 => 61,  177 => 60,  166 => 52,  162 => 51,  154 => 46,  146 => 41,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <script src=\"{{ asset('js/ville.js') }}\" type=\"text/javascript\"></script>
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
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ emploi.intitule|upper }}</h1>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Entreprise:</label>
                    {{ form_errors(edit_form.client)}}
                    {{ form_widget(edit_form.client) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Intitulé du poste:</label>
                    {{ form_errors(edit_form.intitule) }}
                    {{ form_widget(edit_form.intitule) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type de contrat:</label>
                    {{ form_errors(edit_form.contrat)}}
                    {{ form_widget(edit_form.contrat)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <label class=\"control-label\">Lieu d'activité:</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    {#<label class=\"control-label\">Code postal</label>#}
                    {{ form_errors(edit_form.villeCodePostal) }}
                    {{ form_widget(edit_form.villeCodePostal) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    {#<label class=\"control-label\">Ville</label>#}
                    {{ form_errors(edit_form.villeActivite) }}
                    {{ form_widget(edit_form.villeActivite) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nombre de postes:</label>
                    {{ form_errors(edit_form.nombrePoste)}}
                    {{ form_widget(edit_form.nombrePoste)}}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Site de parution:</label>
                    {{ form_errors(edit_form.siteParution)}}
                    {{ form_widget(edit_form.siteParution)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Description du poste:</label>
                    {{ form_errors(edit_form.description)}}
                    {{ form_widget(edit_form.description) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-5\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregistrer</button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>


{% endblock %}", "@MALrm/Emploi/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\edit.html.twig");
    }
}
