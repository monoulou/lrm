<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1cec2e73f6703f2ee777bea2a830ce55d050f56bfd7489670bbb1c6dc4c6d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e0a01213aea3b9f54a4f26977e144cbc6406e01e6e6747126822b40d31dec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e0a01213aea3b9f54a4f26977e144cbc6406e01e6e6747126822b40d31dec5->enter($__internal_71e0a01213aea3b9f54a4f26977e144cbc6406e01e6e6747126822b40d31dec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1127cf9bf8190cc26876ca835b134a132dd523a05deda756cce45e3e58223f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1127cf9bf8190cc26876ca835b134a132dd523a05deda756cce45e3e58223f27->enter($__internal_1127cf9bf8190cc26876ca835b134a132dd523a05deda756cce45e3e58223f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e0a01213aea3b9f54a4f26977e144cbc6406e01e6e6747126822b40d31dec5->leave($__internal_71e0a01213aea3b9f54a4f26977e144cbc6406e01e6e6747126822b40d31dec5_prof);

        
        $__internal_1127cf9bf8190cc26876ca835b134a132dd523a05deda756cce45e3e58223f27->leave($__internal_1127cf9bf8190cc26876ca835b134a132dd523a05deda756cce45e3e58223f27_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_70fa9a1ed2bfb3d0de8f06780ec8134e78b96c23829f8b2e640dfb1f1cdc42d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fa9a1ed2bfb3d0de8f06780ec8134e78b96c23829f8b2e640dfb1f1cdc42d5->enter($__internal_70fa9a1ed2bfb3d0de8f06780ec8134e78b96c23829f8b2e640dfb1f1cdc42d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b5e369c8d5c4aa0480a67f8a17d0362af1f8bde1cbe9067b43bc5bc022d67e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5e369c8d5c4aa0480a67f8a17d0362af1f8bde1cbe9067b43bc5bc022d67e1->enter($__internal_5b5e369c8d5c4aa0480a67f8a17d0362af1f8bde1cbe9067b43bc5bc022d67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        // line 8
        echo "
        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>

    ";
        // line 22
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_5b5e369c8d5c4aa0480a67f8a17d0362af1f8bde1cbe9067b43bc5bc022d67e1->leave($__internal_5b5e369c8d5c4aa0480a67f8a17d0362af1f8bde1cbe9067b43bc5bc022d67e1_prof);

        
        $__internal_70fa9a1ed2bfb3d0de8f06780ec8134e78b96c23829f8b2e640dfb1f1cdc42d5->leave($__internal_70fa9a1ed2bfb3d0de8f06780ec8134e78b96c23829f8b2e640dfb1f1cdc42d5_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5144f9ad992437007bd6d95395e1a1515231f377d38d82653db02b4fe081b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5144f9ad992437007bd6d95395e1a1515231f377d38d82653db02b4fe081b9a->enter($__internal_e5144f9ad992437007bd6d95395e1a1515231f377d38d82653db02b4fe081b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b59114a2e413b666dc22d16f92357ba109bebb5c86f8c89612a1e8f3b8b2d1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59114a2e413b666dc22d16f92357ba109bebb5c86f8c89612a1e8f3b8b2d1ef->enter($__internal_b59114a2e413b666dc22d16f92357ba109bebb5c86f8c89612a1e8f3b8b2d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "    ";
        
        $__internal_b59114a2e413b666dc22d16f92357ba109bebb5c86f8c89612a1e8f3b8b2d1ef->leave($__internal_b59114a2e413b666dc22d16f92357ba109bebb5c86f8c89612a1e8f3b8b2d1ef_prof);

        
        $__internal_e5144f9ad992437007bd6d95395e1a1515231f377d38d82653db02b4fe081b9a->leave($__internal_e5144f9ad992437007bd6d95395e1a1515231f377d38d82653db02b4fe081b9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 23,  105 => 22,  94 => 24,  91 => 22,  86 => 18,  80 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  52 => 8,  50 => 7,  41 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# On étend notre layout #}
{% extends \"base.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

        <div class=\"row\" style=\"margin-top: 20px; margin-left: -35px\">
            <div class=\"col-lg-3\">
                {% for key, messages in app.session.flashbag.all() %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ key }}\">
                            {{ message|trans({}, 'FOSUserBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
